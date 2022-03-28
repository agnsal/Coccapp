<template>
    <div class="coccaBkg">
        <TopMenu/>
        <CoopsCollection/>
    </div>
</template>

<script>
export default {
    name: "Coccapp",
    // components: {CoopsCollection},
}
</script>

<style>
.coccaBkg{
    background-image: url('./images/chicken-feet.png');
    height: 100vh;
    background-color: #FFFF8D
}
.orangeBkg {
    background-color: #F57F17 !important;
}
.centered{
    text-align: center;
}
</style>
