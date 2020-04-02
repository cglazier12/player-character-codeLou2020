<template>
    <div id="app">
        <div class="container tabs">
            <div class="row">
                <button
                    class="col-3 text-center single-tab"
                    @click="switchComponent('stats')"
                    :disabled="currentComp">
                    Stats
                </button>
                <button
                    class="col-3 text-center single-tab"
                    @click="switchComponent('background')"
                    :disabled="currentComp">
                    Background
                </button>
                <button
                    class="col-3 text-center single-tab"
                    @click="switchComponent('equipment')"
                    :disabled="currentComp">
                    Equipment
                </button>
                <button
                    class="col-3 text-center single-tab"
                    @click="switchComponent('spells')"
                    :disabled="currentComp">
                    Spells
                </button>
            </div>
        </div>
    </div>
</template>


<script>
    import { bus } from '../index.js';

    export default {
        props: {
            currentComp: {
                type: String,
                required: true
            }
        },

        methods: {
            switchComponent(comp) {
                bus.$emit('switchComp', comp);
            }
        }
    }
</script>



<style scoped>

</style>
