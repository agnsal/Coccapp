<template>
    <v-card
        class="mx-auto centered"
        max-width="700"
        tile
    >
        <v-card-title>My Coops</v-card-title>
        <v-list dense>
            <v-list-item-group>
                <v-list-item v-for="(item, i) in coopsCollection" :key="i">
<!--                    {{item}}-->
                    <v-list-item-content @click="selectedCoop = i">
                        <Coop :coop-data="item" :detailed="selectedCoop === i"/>
                    </v-list-item-content>
                </v-list-item>
            </v-list-item-group>
        </v-list>
        <AddCoop/>
    </v-card>
</template>

<script>
    // import Coop from "./Coop";
    export default {
        name: 'CoopsCollection',
        data: () => ({
            selectedCoop: null,
            coopsCollection: []
        }),
        methods: {
            getCoopsCollection(){
                axios.get('api/coop/coop').then(response => {
                    this.coopsCollection = response.data
                }).catch(error => {
                    console.log(error);  // Test
                });
            }
        },
        created() {
            this.getCoopsCollection();
        }
    }
</script>

<style scoped>
</style>
