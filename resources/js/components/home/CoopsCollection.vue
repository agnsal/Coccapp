<template>
    <v-card
        class="mx-auto centered"
        tile
    >
        <v-list dense>
            <v-subheader>My Coops</v-subheader>
            <v-list-item-group>
                <v-list-item
                    v-for="(item, i) in coopsCollection"
                    :key="i">
<!--                    {{item}}-->
                    <v-list-item-content>
                        <Coop :coop-data="item"/>
                    </v-list-item-content>
                </v-list-item>
                <v-btn
                    class="mx-2 orangeBkg centered"
                    fab
                >
                    <v-icon dark>
                        mdi-plus
                    </v-icon>
                </v-btn>
            </v-list-item-group>
        </v-list>
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
