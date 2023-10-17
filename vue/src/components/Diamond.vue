<template>
        <img :src="diamond.previewImageURL"/>
        <h3><a target="_blank" :href="'https://www.rarecarat.com/diamond/' + diamond.id">{{ diamond.carat }} Carats - ${{ diamond.price }}</a></h3>
        <h4 v-if="diamond.isRecommended">Recommended</h4>
        <ul>
            <li>Shape: {{ diamond.shape }}</li>
            <li>Lab: {{ diamond.lab }}</li>
            <li>Color: {{ diamond.color }}</li>
            <li>Cut: {{ diamond.cut }}</li>
            <li>Clarity: {{ diamond.clarity }}</li>
        </ul>
</template>

<script>
    
    export default {
        name: 'Diamond',
        props: {
            diamond: Object
        },
        methods: {
        }

    }
</script>