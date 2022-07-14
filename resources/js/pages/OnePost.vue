<template>
  <div>
    <h1>{{post.title}}</h1>
  </div>
</template>

<script>
export default {
    name: "OnePost",

    created() {
        this.getPostDetails();
    },

    methods: {
        getPostDetails() {
            //take slug from route Vue
            const slug = this.$route.params.slug;
            //call axios to api, adding slug to api url
            axios.get(`/api/posts/${slug}`).then((resp) => {
                if (resp.data.success) {
                        this.post = resp.data.results;
                    } else {
                        this.$router.push({name: "notfound"});
                    }
            });
        }
    }
}
</script>

<style>

</style>