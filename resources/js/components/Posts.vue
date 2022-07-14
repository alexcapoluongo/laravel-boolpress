<template>

<div class="container">
<h2>Posts List</h2>
<div class="row row-cols-4">

    <!-- single post -->
    <div v-for="post in posts" :key="post.id" class="col">
        <div class="card my-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">{{ troncateText(post.content, 50) }}</p>
        </div>
    </div>
</div>
</div>
</div>

</template>

<script>

export default {
    name: 'Posts',
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
        troncateText(text, maxCharNumber) {
            if (text.length > maxCharNumber) {
                return text.substr(0, maxCharNumber) + '...';
            }
            return text;
        }
    }
}
</script>

<style>

</style>