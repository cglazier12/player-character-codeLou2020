<template>
    <div id="app">
        <div>
            <component :is="currentComp"></component>
        </div>

        <toolbar :current-comp="currentComp"></toolbar>
    </div>
</template>

<script>
    import Toolbar from './components/Toolbar.vue';
    import Stats from './components/Stats.vue';
    import Background from './components/Background.vue';
    import Equipment from './components/Equipment.vue';
    import Spells from './components/Spells.vue';
    import { bus } from './index.js';

    export default {
        el: '#app',

        data() {
            return {
                currentComp: 'notes-list'
            };
        },

        created() {
            bus.$on('switchComp', comp => {
                this.currentComp = comp;
            })
        },

        components: {
            'toolbar': Toolbar,
            'messages-list': Stats,
            'notes-list': Background,
            'other-list': Equipment,
            'spells-list': Spells,

        }
    }

</script>

<style scoped>

</style>
