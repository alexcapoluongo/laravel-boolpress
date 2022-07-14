<template>

<div class="container">
    <h2>Posts List</h2>
    <div class="row row-cols-4">

        <!-- single post -->
        <div v-for="post in posts" :key="post.id" class="col">
            <SinglePost :post="post"/>
        </div>
    </div>
</div>


</template>

<script>
import SinglePost from "../components/SinglePost.vue";
export default {
    name: 'Posts',

    components: {
        SinglePost,
    },

    data() {
        return {
            posts: []
        }
    },

    created() {
        this.getPosts();
    },

    methods: {
        getPosts() {
            axios.get('http://127.0.0.1:8000/api/posts')
            .then(resp=> {
                this.posts = resp.data.results;
            })
        },

    }
}
</script>

<style>

</style>