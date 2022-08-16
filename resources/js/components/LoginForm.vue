<template>
    <v-form
        ref="form"
        v-model="valid"
        lazy-validation
        class="m-auto"
    >

        <v-text-field
            v-model="email"
            :rules="emailRules"
            label="E-mail"
            required
        ></v-text-field>

        <v-text-field
            v-model="password"
            :rules="passwordRules"
            label="Password"
            required
        ></v-text-field>

        <v-btn
            :disabled="!valid"
            color="success"
            class="mr-4"
            @click="login"
        >
            Login
        </v-btn>

    </v-form>
</template>

<script>
export default {
    name: "LoginForm",
    data:() => ({
        valid: true,
        email: '',
        emailRules: [
            v => !!v || 'E-mail is required',
            v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        ],
        password: '',
        passwordRules: [
            v => !!v || 'Password is required'
        ],
    }),
    methods: {
        login() {
            this.$refs.form.validate()
            axios.get('/sanctum/csrf-cookie').then(response => {
                let body = {'email': this.email, 'password': this.password}
                axios.post('/api/auth/login', body)
                    .then(function (response) {
                        console.log(response)  // Test
                    })
                    .catch(function (response) {
                        console.log(response)  // Test
                    })

            });
        }
    }
}
</script>

<style scoped>

</style>
