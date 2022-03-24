<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Coops</div>
                    <div class="card-body">
                        Coops Collection!!!
                        <Coop v-for="(coop, index) in coopsList" :key="index" :coopName="coop.name"></Coop>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import Coop from "./Coop";
    export default {
        name: 'CoopsCollection',
        // components: {Coop},
        data () {
            return {
                coopsList: [
                    {
                       'id': 0,
                       'name': 'happyCoop'
                    },
                    {
                        'id': 1,
                        'name': 'myCoop'
                    }
                ]
            }
        },
        mounted() {
            console.log('Coop mounted.');
        }
    }
</script>
