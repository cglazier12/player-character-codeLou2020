import Background from './components/Background';
import Equipment from './components/Equipment';
import Spells from './components/Spells';
import Stats from './components/Stats';


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
    ]
}
