<template>
        <img :src="diamond.previewImageURL"/>
        <p><a target="_blank" :href="'https://www.rarecarat.com/diamond/' + diamond.id">{{ diamond.carat }} - ${{ diamond.price }}</a></p>
        <p >{{ diamond.shape }}</p>
        <p >{{ diamond.lab }}</p>
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