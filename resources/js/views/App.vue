<template>
  <div>
    <div class="d-flex justify-content-around">
      <h1 class="mt-5">front office</h1>
      <a class="mt-5" href="admin">Esegui il Login</a>
    </div>

    <Posts/>
  </div>
</template>

<script>
import Posts from '../components/Posts.vue';

export default {
  name: 'App',
  components: {
    Posts
}
}
</script>

<style>

</style>