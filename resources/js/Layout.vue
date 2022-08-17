<template>
    <h1 class="display-3">Coccapp</h1>
    <router-view :key="$route.path"></router-view>
</template>

<script>
export default {
    name: "Layout",
    data:() => {
        logged: false
    },
    mounted(){
        if(!this.logged){
            this.$router.push({name: 'login'})
        }
    },
}
</script>

<style scoped>

</style>
