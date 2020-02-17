<template>
    <div>
        <div class="card" style="width: 10rem;">
            <img :src="image" class="card-img-top" alt="name" />
            <div class="card-body text-center">
                <h5 class="card-title">{{ name }}</h5>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["name", "image"]
};
</script>
