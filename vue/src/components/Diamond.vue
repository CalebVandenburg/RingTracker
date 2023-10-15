<template>
    <div class="diamond">

        <h3>{{ diamond.carat }}</h3>
        <p>{{ diamond.price }}</p>
        <p >{{ diamond.shape }}</p>
        <p >{{ diamond.lab }}</p>
    </div>
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