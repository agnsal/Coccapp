<template>
    <div>
        <p>
            {{coopData.name}}
            <v-icon large color="green darken-2">mdi-feather</v-icon>
            {{countedChickens}}
        </p>
        <v-card
            v-if="detailed"
            class="mx-auto centered"
            max-width="700"
            tile
        >
            <CloseXButton />
            <v-card-title>{{coopData.name}} Chickens:</v-card-title>
            <v-card-text>
                <v-row
                    align="center"
                    class="mx-0"
                >
                    <v-list dense>
                        <v-list-item-group>
                            <v-list-item v-for="(item, i) in coopData.chickens" :key="i">
                                <v-list-item-content>
                                    Name: {{item.name}}; Gender: {{item.is_female}}; Breed: {{item.breed_id}}; Birth Date: {{item.birth_date}}
                                </v-list-item-content>
                            </v-list-item>
                        </v-list-item-group>
                    </v-list>
                </v-row>
            </v-card-text>
        </v-card>
    </div>
</template>

<script>
    import CloseXButton from "../CloseXButton";
    export default {
        name: 'Coop',
        components: {CloseXButton},
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
