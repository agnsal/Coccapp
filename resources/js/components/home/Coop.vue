<template>
    <p>I am a Coop!!!</p>
</template>

<script>
    export default {
        name: 'Coop',
        props: ['coopName'],
        mounted() {
            console.log('Coop mounted.');
        }
    }
</script>
