<template>
    <p>{{coopData.name}}
        <v-icon
            large
            color="green darken-2"
        >
            mdi-feather
        </v-icon>
        {{countedChickens}}
    </p>
</template>

<script>
    export default {
        name: 'Coop',
        props: ['coopData'],
        mounted() {
            console.log('Coop mounted.');
        },
        computed: {
            countedChickens(){
                return this.coopData.chickens.length;
            }
        }
    }
</script>
