<template>
    <h1 class="display-3">Coccapp</h1>
    <general-form :schema="schema"></general-form>
</template>

<script>
import GeneralForm from "../components/GeneralForm.vue";

export default {
    name: "LoginView",
    components: {GeneralForm},
    data:() => ({
        schema: {
            id: null,
            class: 'm-auto',
            color: 'success',
            style: '',
            title: {
                label: 'Login',
                id: 'loginID',
                class: 'testClass',
                style: 'margin-left: 50%; color: orange'
            },
            fields: [
                {
                    name: 'email',
                    label: 'E-mail',
                    class: null,
                    color: 'orange',
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
                    class: null,
                    color: 'orange',
                    initValue: '',
                    rules: [
                        v => !!v || 'Password is required'
                    ],
                    required: true
                }
            ],
            submitButton: {
                label: 'Submit',
                class: 'mr-4',
                color: 'success',
                url: '/api/auth/login',
                nextUrl: 'dashboard'
            },
        },
    }),
    mounted(){
        console.log('Main component Mounted')  // Test
    }
}
</script>

<style scoped>

</style>
