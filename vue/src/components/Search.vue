<template>
  <form @submit="onSubmit">
    <label for="lab">Lab: </label>
    <select name="lab">
      <option value="2">IGI</option>
      <option value="0" selected="selected">GIA</option>
      <option value="5" >GCAL</option>
    </select>
    <br>
    <label for="caratMin">Carat Minimum: </label>
    <input name="caratMin" value="1.5">
    <br/>
    <label for="caratMax" >Carat Maximum: </label>
    <input name="caratMax" value="2">
    <br/>
    <label for="colorMax">Color Maximum: </label>
    <select name="colorMax">
      <option value="8" selected="selected">K</option>
      <option value="7">J</option>
      <option value="6">I</option>
      <option value="5">H</option>
      <option value="4">G</option>
      <option value="3">F</option>
      <option value="2">E</option>
      <option value="1" >D</option>
    </select>
    <br/>
    <label for="colorMin">Color Minimum: </label>
    <select name="colorMin">
      <option value="8" >K</option>
      <option value="7">J</option>
      <option value="6">I</option>
      <option value="5">H</option>
      <option value="4">G</option>
      <option value="3">F</option>
      <option value="2">E</option>
      <option value="1" selected="selected">D</option>
    </select>
    <br/>
    <label for="cutMax">Cut Maximum: </label>
    <select name="cutMax">
      <option value="4" selected="selected">Not Good</option>
      <option value="3">Good</option>
      <option value="2">Very Good</option>
      <option value="1">Excellent</option>
      <option value="0">Rare Carat Excellent</option>
      <option value="-1" >Rare Carat Ideal</option>
    </select>
    <br/>
    <label for="cutMin">Cut Minimum: </label>
    <select name="cutMin">
      <option value="4">Not Good</option>
      <option value="3">Good</option>
      <option value="2">Very Good</option>
      <option value="1">Excellent</option>
      <option value="0">Rare Carat Excellent</option>
      <option value="-1" selected="selected">Rare Carat Ideal</option>
    </select>
    <br/>
    <label for="clarityMax">Clarity Maximum: </label>
    <select name="clarityMax">
      <option value="8" selected="selected">SI2</option>
      <option value="7">SI1</option>
      <option value="6">VS2</option>
      <option value="5">VS1</option>
      <option value="4">VVS2</option>
      <option value="3">VVS1</option>
      <option value="2">IF</option>
      <option value="1">FL</option>
    </select>
    <br/>
    <label for="clarityMin">Clarity Minimum: </label>
    <select name="clarityMin">
      <option value="8">SI2</option>
      <option value="7">SI1</option>
      <option value="6">VS2</option>
      <option value="5">VS1</option>
      <option value="4">VVS2</option>
      <option value="3">VVS1</option>
      <option value="2">IF</option>
      <option value="1" selected="selected">FL</option>
    </select>
    <br/>
    <label for="fluorescenceMax">Fluorescence Maximum (0-4): </label>
    <input name="fluorescenceMax" value="4">
    <br/>
    <label for="fluorescenceMin">Fluorescence Minimum (0-4): </label>
    <input name="fluorescenceMin" value="0">
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
    text-align: left;
  }
</style>
