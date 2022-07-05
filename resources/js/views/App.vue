<template>
  <div>
    <div class="d-flex justify-content-around">
      <h1 class="mt-5">front office</h1>
      <a class="mt-5" href="admin">Esegui il Login</a>
    </div>
    <Intro/>
  </div>
</template>

<script>
import Intro from '../components/Intro.vue'

export default {
  name: 'App',
  components: {
    Intro,
}
}
</script>

<style>

</style>