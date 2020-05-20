import Background from './components/sheets/Background';
import Equipment from './components/sheets/Equipment';
import Spells from './components/sheets/Spells';
import Stats from './components/sheets/Stats';
import Abilities from "./components/sheets/Stats/Abilities";
import Proficiencies from "./components/sheets/Stats/Proficiencies";


export default {
    mode: 'history',

    routes: [
        {
            path: '/home/background',
            component: Background
        },

        {
            path: '/home/equipment',
            component: Equipment
        },

        {
            path: '/home/spells',
            component: Spells
        },

        {
            path: '/home/stats',
            component: Stats
        },

        {
            path: '/home/stats/abilities',
            component: Abilities
        },

        {
            path: '/home/stats/proficiencies',
            component: Proficiencies
        },

    ]
}
