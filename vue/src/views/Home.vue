<template>
    <div>
      <h1>Cross Directory Diamond Finder</h1>
    </div>
    <Search @get-search-results="displaySearchResults"/>
    <Diamonds :diamonds="diamonds"/>
  </template>
  <script>
    import Diamonds from '../components/Diamonds.vue'
    import Search from '../components/Search.vue'
    export default {
        name: 'Home',
        props: {
        },
        data() {
            return {
                diamonds: [],
            }
        },
        components: {
            Search,
            Diamonds
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
  </style>
  