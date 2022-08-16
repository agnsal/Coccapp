<template>
    <v-form
        ref="form"
        v-model="valid"
        lazy-validation
        :id="schema.id"
        :class="schema.class"
        :color="schema.color"
        :style="schema.style"
    >

        <h3 :id="schema.title.id" :class="schema.title.class" :style="schema.title.style">{{schema.title.label}}</h3>

        <v-text-field v-for="item in schema.fields"
            v-model="result[item.name]"
            :id="item.id"
            :class="item.class"
            :color="item.color"
            :style="item.style"
            :rules="item.rules"
            :label="item.label"
            :required="item.required"
        ></v-text-field>

        <v-btn
            :disabled="!valid"
            :id="schema.submitButton.id"
            :color="schema.submitButton.color"
            :style="schema.submitButton.style"
            :class="schema.submitButton.class"
            @click="submit"
        >
            {{schema.submitButton.label}}
        </v-btn>

    </v-form>
</template>

<script>
export default {
    name: "GeneralForm",
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
            this.$refs.form.validate().then(res => {
                if (this.valid) {
                    axios.get('/sanctum/csrf-cookie').then(response => {
                        axios.post(this.schema.submitButton.url, this.result)
                            .then(function (response) {
                                console.log(response)  // Test
                            })
                            .catch(function (response) {
                                console.log(response)  // Test
                            })
                        })
                    }
                this.valid = true
                }
            )
        }
    }
}
</script>

<style scoped>
</style>
