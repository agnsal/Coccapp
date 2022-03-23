<template>
    <div class="card">
        <div class="card-header">Hello World Component</div>
        <div class="card-body">
            Hello World!!!!
        </div>
    </div>
</template>

<script>
    export default {
        name: 'HelloWorld',
        mounted() {
            console.log('Hello World Component mounted!!!')
        }
    }
</script>
