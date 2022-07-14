<template>
    <div>
    <h1>Hey! That's our Blog Page :)</h1>
    <p>Take a look at the following posts</p>
    <Posts/>
    </div>

</template>

<script>
import Posts from '../components/Posts.vue'
export default {
    name: 'Blog',
    components: {
        Posts,
    }
}
</script>

<style>

</style>