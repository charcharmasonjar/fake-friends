<template>
    <form @submit.prevent="submit">
        <h3>Create Cast</h3>

        <div class="form-group">
            <label for="cast">Cast Name</label>
            <input type="text" class="form-control" name="cast" id="cast" />
            <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0]}}</div>
        </div>
        <button type="submit">Create Cast</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            fields: {},
            errors: {}
        };
    },
    methods: {
        submit() {
            this.errors = {};
            axios.post('/cast', this.fields).then(response => {
                alert("cast member info sent!!");
            }).catch(error => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                }
            })
        }
    }
};
</script>
