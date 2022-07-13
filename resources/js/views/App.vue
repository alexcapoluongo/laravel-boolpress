<template>
  <div>
    <div class="d-flex justify-content-around">
      <Header/>
      <a class="mt-5" href="admin">Esegui il Login</a>
    </div>
    <router-view></router-view>
  </div>
</template>

<script>
import Header from "../components/Header.vue";

export default {
  name: 'App',
  components: {
    Header,
}
}
</script>

<style>

</style>