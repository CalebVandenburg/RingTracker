<template>
  <form @submit="onSubmit">
    <label for="carat"></label>
    <input name="carat">
    <button type="submit">Submit</button>
  </form>
</template>
<script>
  export default {
    name: 'Search',
    data() {
      return {
        text: '',
        day: '',
        reminder: false,
      }
    },
    methods: {
      onSubmit(e) {
        e.preventDefault()
        const form = e.currentTarget;
        const formData = new FormData(form);
        const plainFormData = Object.fromEntries(formData.entries());
	      const formDataJsonString = JSON.stringify(plainFormData);
        const requestOptions = {
          method: "POST",
          headers: { "Content-Type": "application/json",
                      'Access-Control-Allow-Origin':'*',
                    'Access-Control-Allow-Methods':'POST,PATCH,OPTIONS'},
          body: formDataJsonString
        };
        fetch("http://127.0.0.1:8000/api/rings", requestOptions)
        .then(response => response.json())
        .then(data => this.$emit('get-search-results', data));
      },
    },
  }
  </script>


<style scoped>
</style>
