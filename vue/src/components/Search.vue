<template>
  <form @submit="onSubmit">
    <label for="caratMin">Carat Minimum: </label>
    <input name="caratMin">
    <br/>
    <label for="caratMax">Carat Maximum: </label>
    <input name="caratMax">
    <br/>
    <label for="colorMin">Color Minimum: </label>
    <input name="colorMin">
    <br/>
    <label for="colorMax">Color Maximum: </label>
    <input name="colorMax">
    <br/>
    <label for="cutMin">Cut Minimum: </label>
    <input name="cutMin">
    <br/>
    <label for="cutMax">Cut Maximum: </label>
    <input name="cutMax">
    <br/>
    <label for="clarityMin">Clarity Minimum: </label>
    <input name="clarityMin">
    <br/>
    <label for="clarityMax">Clarity Maximum: </label>
    <input name="clarityMax">
    <br/>
    <label for="fluorescenceMin">Fluorescence Minimum (0-4): </label>
    <input name="fluorescenceMin">
    <br/>
    <label for="fluorescenceMax">Fluorescence Maximum (0-4): </label>
    <input name="fluorescenceMax">
    <br/>
    <hr/>
    <label for="orderBy">Order By: </label>
    <select name="orderBy">
      <option value="price">Price</option>
      <option value="carat">Carat</option>
      <option value="cut">Cut</option>
      <option value="color">Color</option>
      <option value="clarity">Clarity</option>
    </select>
    <br>
    <label for="orderDirection">Order Direction: </label>
    <select name="orderDirection">
      <option value=true>Asc</option>
      <option value=false>Desc</option>
    </select>
    <br>    
    <hr/>
    <button type="submit">Submit</button>
    <br>    
    <br>   
    <br>   
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
  form {
    width: 40%;
    min-width: 500px;
    justify-self: center;
  }
</style>
