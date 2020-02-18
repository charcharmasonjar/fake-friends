<template>
    <div>

        <div class="card" style="width: 10rem; height: 14rem">
            <img
                :src="image"
                class="card-img-top"
                alt="name"
                style="height: 10rem; object-fit: cover"
            />
            <div class="card-body text-center">
                <h5 class="card-title">{{ name }}</h5>
            </div>
        </div>
        <div>
            <input type="radio" id="infant" value="infant" v-model="age" />
            <label for="infant">Infant</label>
            <br />
            <input type="radio" id="adult" value="adult" v-model="age" />
            <label for="adult">Adult</label>
            <br />
            <input type="radio" id="elderly" value="elderly" v-model="age" />
            <label for="elderly">Elderly</label>
            <br />
            <span>Age: {{ age }}</span>
            <br />
        </div>
        <div>
            <input type="radio" id="brown" value="brown" v-model="hair" />
            <label for="brown">Brown</label>
            <br />
            <input type="radio" id="blonde" value="blonde" v-model="hair" />
            <label for="blonde">Blonde</label>
            <br />
            <input type="radio" id="black" value="black" v-model="hair" />
            <label for="black">Black</label>
            <br />
            <input type="radio" id="gray" value="gray" v-model="hair" />
            <label for="gray">Gray</label>
            <br />
            <input type="radio" id="red" value="red" v-model="hair" />
            <label for="red">Red</label>
            <br />
            <span>hair: {{ hair }}</span>
            <br />
            <button @click="getFaces(age, hair)">Get faces</button>
        </div>

        <div class="card" style="width: 10rem; height: 14rem">
            <img
                :src="newImg"
                class="card-img-top"
                alt="name"
                style="height: 10rem; object-fit: cover"
            />
            <div class="card-body text-center">
                <h5 class="card-title">New {{ name }}</h5>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            age: "",
            hair: "",
            newImg:
                "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973461_960_720.png"
        };
    },
    props: ["name", "image", "castid"],
    methods: {
        getFaces(age, hair) {
            axios.get('/json-api', {
                params: {
                    age: age,
                    hair_color: hair
                }
            }).then(res => {
                this.newImg = res.data.faces[0].urls[4][512];
                axios.post(`/cast/${this.castid}`, {
                    name: this.name,
                    image: this.newImg})
                .then(response => {
                    console.log(response);
                })
            })
        }
    }
};
</script>
