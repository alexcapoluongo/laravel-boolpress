<template>
  <div class="container">
    <h1>{{post.title}}</h1>
    <p>{{post.content}}</p>
  </div>
</template>

<script>
export default {
    name: "OnePost",

    data() {
        return {
            post: null,
        }
    },

    created() {
        this.getPostDetails();
    },

    methods: {
        getPostDetails() {
            //take slug from route Vue
            const slug = this.$route.params.slug;
            //call axios to api, adding slug to api url
            axios.get(`/api/posts/${slug}`).then((resp) => {            
                this.post = resp.data.results;              
            });
        }
    }
}
</script>

<style>

</style>