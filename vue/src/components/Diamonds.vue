<template>
    <div class="diamondsContainer" v-for="diamond in diamonds">
        <Diamond :diamond=diamond />
    </div>
  </template>
  <script>
  import Diamond from './Diamond.vue'
    export default {
      name: 'Diamonds',
      props: {
        diamonds: Array
      },
      components: {
        Diamond
      }
    }
    </script>
  
  
  <style scoped>
  </style>
  