<template>
    <div>
        <h1>Create Cast</h1>
        <div class="row" style="justify-content: space-between">
            <cast-member
                v-bind:castid="castid"
                v-for="friend in friends"
                v-bind:name="friend.name"
                v-bind:image="friend.image"
                :key="friend.id"
            >
            </cast-member>
        </div>
        <a href="/casts">Cast Complete</a>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "",
            fields: {},
            errors: {},
            friends: [
                {
                    id: 1,
                    name: "Rachel",
                    image:
                        "https://akns-images.eonline.com/eol_images/Entire_Site/2014111/rs_560x415-140211085529-560.jennifer-aniston-friends.ls.21114_copy.jpg?fit=inside|900:auto&output-quality=90"
                },
                {
                    id: 2,
                    name: "Monica",
                    image:
                        "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQSQadap5xGA0BRf-3uQ4QH5Y0K9sYfYTG2VSlqe7txOPTt49a4"
                },
                {
                    id: 3,
                    name: "Phoebe",
                    image: "https://i.redd.it/ks5fal6mob141.jpg"
                },
                {
                    id: 4,
                    name: "Joey",
                    image: "https://i.pinimg.com/originals/42/73/af/4273afb2c9d06fc3a2caff2535add639.jpg"
                },
                {
                    id: 5,
                    name: "Ross",
                    image:
                        "https://vignette.wikia.nocookie.net/friends/images/9/9d/Ross_Unagi.jpg/revision/latest?cb=20190210055223"
                }
            ]
        };
    },
    methods: {
        submit() {
            this.errors = {};
            axios
                .post("/cast", {
                    name: this.name,
                    friends: this.friends
                })
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
        }
    },
    props: ["castid"]
};
</script>
