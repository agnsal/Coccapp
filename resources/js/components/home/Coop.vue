<template>
    <p>Coop: {{coopName}}</p>
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
