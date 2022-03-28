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
                    <v-list-item-icon>
                        <v-icon v-text="item.icon"></v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <Coop :coop-name="item.name"/>
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
                axios.get('api/coop/collection').then(response => {
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
