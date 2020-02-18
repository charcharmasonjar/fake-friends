<template>
    <div>
        <h1>Create Cast</h1>
        <div class="row" style="justify-content: space-between">
            <cast-member
                v-for="friend in friends"
                v-bind:name="friend.name"
                v-bind:image="friend.image"
                :key="friend.id"
            >
            </cast-member>
        </div>
        <form @submit.prevent="submit">
            <div class="form-group">
                <label for="name">Name your new cast</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    v-model="fields.name"
                />
                <div v-if="errors && errors.name" class="text-danger">
                    {{ errors.name[0] }}
                </div>
            </div>
            <span>{{ castid }}</span>
            <button type="submit">Create Cast</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            fields: {},
            errors: {},
            castid: "",
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
                    image:
                        "data:image/jpeg;base64,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"
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
                .post("/cast", this.fields)
                .then(response => {
                    console.log(response);
                    alert("cast member info sent!!");
                })
                .catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
        }
    }
};
</script>
