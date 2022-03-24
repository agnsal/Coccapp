<template>
    <v-card
        class="mx-auto"
        max-width="300"
        tile
    >
        <v-list dense>
            <v-subheader>My Coops</v-subheader>
            <v-list-item-group
                v-model="selectedItem"
            >
                <v-list-item
                    v-for="(item, i) in items"
                    :key="i"
                >
                    <v-list-item-icon>
                        <v-icon v-text="item.icon"></v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <Coop :coop-name="item.name"/>
                    </v-list-item-content>
                </v-list-item>
            </v-list-item-group>
        </v-list>
    </v-card>
</template>

<script>
    // import Coop from "./Coop";
    export default {
        name: 'CoopsCollection',
        // components: {Coop},
        data: () => ({
            selectedItem: 0,
            items: [
                {
                    'id': 0,
                    'icon': 'mdi-egg',
                    'name': 'happyCoop'
                },
                {
                    'id': 1,
                    'icon': 'mdi-egg',
                    'name': 'myCoop'
                }
            ]
        }),
        mounted() {
            console.log('Coop mounted.');
        }
    }
</script>
