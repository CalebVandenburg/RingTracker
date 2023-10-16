

<template>
  <div>
    <h1>Cross Directory Diamond Finder</h1>
  </div>
  <Search @get-search-results="displaySearchResults"/>
  <Diamonds :diamonds="diamonds"/>
</template>
<script >
import HelloWorld from './components/HelloWorld.vue'
import Search from './components/Search.vue'
import Diamonds from './components/Diamonds.vue'
export default {
  name: 'App',
  components: {
    Search,
    Diamonds,
    HelloWorld
  },
  data() {
    return {
      diamonds: [],
    }
  },
  methods: {
    displaySearchResults(diamondsResults) {
      console.log(diamondsResults);
      this.diamonds = diamondsResults;
    }
  }
}
</script>
<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
