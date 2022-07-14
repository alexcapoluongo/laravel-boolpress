<template>
   <div class="card my-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">{{ troncateText(post.content, 50) }}</p>
            <router-link :to="{ name: 'single-post', params: { slug: post.slug } }" class="card-link">See the entire Post</router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "SinglePost",
    props: {
        post: Object
    },
    
    methods: {
    troncateText(text, maxCharNumber) {
        if (text.length > maxCharNumber) {
            return text.substr(0, maxCharNumber) + '...';
        }
        return text;
    }
    },

}
</script>

<style>

</style>