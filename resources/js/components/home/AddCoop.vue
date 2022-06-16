<template>
    <div>
        <v-form v-if="!hideForm" v-model="formData">
            <v-container>
                <v-row>
                    <v-col
                        cols="12"
                        md="4"
                    >
                        <v-text-field
                            v-model="name"
                            :rules="nameRules"
                            :counter="20"
                            label="Coop name"
                            required
                        ></v-text-field>
                    </v-col>
                </v-row>
            </v-container>
        </v-form>
        <v-btn class="mx-2 orangeBkg centered" fab
            @click="hideForm = !hideForm"
        >
            <v-icon v-if="hideForm" dark>mdi-plus</v-icon>
            <v-icon v-else dark>mdi-minus</v-icon>
        </v-btn>
    </div>
</template>

<script>
export default {
    name: "AddCoop",
    data() {
        return {
            hideForm: true,
            formData: null,
            formRules: {
                nameRules: [
                    v => !!v || 'Name is required',
                    v => v.length <= 20 || 'Name must be less than 20 characters',
                ],
            }
        }
    }
}
</script>

<style scoped>

</style>
