<template>
    <div>
        <p>
            {{coopData.name}}
            <v-icon large color="green darken-2">mdi-feather</v-icon>
            {{countedChickens}}
        </p>
        <p v-if="detailed">
            Details!!!
        </p>
    </div>
</template>

<script>
    export default {
        name: 'Coop',
        props: ['coopData', 'detailed'],
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
