<template>
    <h1 class="display-3">Coccapp</h1>
    <login-form></login-form>
</template>

<script>
import LoginForm from "./LoginForm.vue";

export default {
    name: "MainComponent",
    components: {LoginForm},
    mounted(){
        console.log('Main component Mounted')  // Test
    }
}
</script>

<style scoped>

</style>
