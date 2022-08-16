<template>
    <h1 class="display-3">Coccapp</h1>
    <login-form :title="title" :schema="schema"></login-form>
</template>

<script>
import LoginForm from "./LoginForm.vue";

export default {
    name: "MainComponent",
    components: {LoginForm},
    data:() => ({
        schema: {
            title: 'Login',
            fields: [
                {
                    name: 'email',
                    label: 'E-mail',
                    initValue: '',
                    rules: [
                        v => !!v || 'E-mail is required',
                        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
                    ],
                    required: true
                },
                {
                    name: 'password',
                    label: 'Password',
                    initValue: '',
                    rules: [
                        v => !!v || 'Password is required'
                    ],
                    required: true
                }
            ],
            submitButton: {
                'label': 'Submit',
                'url': '/api/auth/login'
            }
        },
    }),
    mounted(){
        console.log('Main component Mounted')  // Test
    }
}
</script>

<style scoped>

</style>
