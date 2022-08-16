<template>
    <p>{{schema.title}}</p>
    <v-form
        ref="form"
        v-model="valid"
        lazy-validation
        class="m-auto"
    >

        <v-text-field v-for="item in schema.fields"
            v-model="result[item.name]"
            :rules="item.rules"
            :label="item.label"
            :required="item.required"
        ></v-text-field>

        <v-btn
            :disabled="!valid"
            color="success"
            class="mr-4"
            @click="submit"
        >
            {{schema.submitButton.label}}
        </v-btn>

    </v-form>
</template>

<script>
export default {
    name: "LoginForm",
    props: {
        schema: Object
    },
    data:() => ({
        result: {},
        valid: true,
    }),
    created() {
        this.init()
    },
    // mounted(){
    //     console.log(this.result)  // Test
    // },
    methods: {
        init(){
            this.schema.fields.forEach(item => {this.result[item.name] = item.initValue})
        },
        submit() {
            this.$refs.form.validate().then(res =>
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post(schema.submitButton.url, this)
                        .then(function (response) {
                            console.log(response)  // Test
                        })
                        .catch(function (response) {
                            console.log(response)  // Test
                        })
                })
            )
        }
    }
}
</script>

<style scoped>

</style>
