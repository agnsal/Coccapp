<template>
    <general-form :schema="schema"></general-form>
</template>

<script>
import GeneralForm from "../components/GeneralForm.vue";

export default {
    name: "LoginView",
    components: {GeneralForm},
    data:() => ({
        schema: null
        // {
        //     id: null,
        //     class: 'm-auto',
        //     color: 'success',
        //     style: '',
        //     title: {
        //         label: 'Login',
        //         id: 'loginID',
        //         class: 'testClass',
        //         style: 'margin-left: 50%; color: orange'
        //     },
        //     fields: [
        //         {
        //             name: 'email',
        //             label: 'E-mail',
        //             class: null,
        //             color: 'orange',
        //             initValue: '',
        //             rules: [
        //                 {
        //                     name: 'regexp',
        //                     param: /.+@.+\..+/,
        //                     message: 'E-mail must be valid'
        //                 },
        //             ],
        //             // rules: [
        //             //     v => !!v || 'E-mail is required',
        //             //     v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        //             // ],
        //             required: true
        //         },
        //         {
        //             name: 'password',
        //             label: 'Password',
        //             class: null,
        //             color: 'orange',
        //             initValue: '',
        //             rules: null,
        //             required: true
        //         }
        //     ],
        //     submitButton: {
        //         label: 'Submit',
        //         class: 'mr-4',
        //         color: 'success',
        //         url: '/api/auth/login',
        //         nextUrl: 'dashboard',
        //         storages: [
        //             {
        //                 action: 'auth/setToken',
        //                 params: ['token']
        //             }
        //         ]
        //     },
        // },
    }),
    created(){
        axios.get('/sanctum/csrf-cookie').then(response => {
            let t = this
            axios.get('/api/auth/loginschema')
                .then(function (response) {
                    // console.log(response.data)  // Test
                    t.schema = response.data['schema']
                })
                .catch(function (response) {
                    console.log(response)  // Test
                })
        })
    }
}
</script>

<style scoped>

</style>
