<template>
    <div>
        <v-app-bar
            light
            class="top-bar orangeBkg"
        >
            <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>
            <v-toolbar-title>Coccapp</v-toolbar-title>
        </v-app-bar>
        <v-navigation-drawer
            v-model="drawer"
            absolute
            temporary
        >
            <v-list
                nav
                dense
            >
                <v-list-item-group
                    v-model="group"
                    active-class="deep-purple--text text--accent-4"
                >
<!--                    <v-list-item>-->
<!--                        <v-list-item-icon>-->
<!--                            <v-icon>mdi-home</v-icon>-->
<!--                        </v-list-item-icon>-->
<!--                        <v-list-item-title>Home</v-list-item-title>-->
<!--                    </v-list-item>-->
<!--                    <v-list-item>-->
<!--                        <v-list-item-icon>-->
<!--                            <v-icon>mdi-account</v-icon>-->
<!--                        </v-list-item-icon>-->
<!--                        <v-list-item-title>Account</v-list-item-title>-->
<!--                    </v-list-item>-->
                    <v-list-item>
                        <v-list-item-icon>
                            <v-icon>mdi-logout</v-icon>
                        </v-list-item-icon>
                        <v-list-item-title>Logout</v-list-item-title>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>
    </div>
</template>

<script>
export default {
    name: "TopMenu",
    data: () => ({
        drawer: false,
        group: null,
    })
}
</script>

<style scoped>
</style>
