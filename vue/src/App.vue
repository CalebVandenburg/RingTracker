

<template>
  <Navigation />
  <router-view></router-view>
</template>
<script >
import Home from './views/Home.vue'
import About from './views/About.vue'
import Navigation from './components/Navigation.vue'
export default {
  name: 'App',
  components: {
    Navigation,
    About,
    Home
  }
}
</script>
<style scoped>
</style>
