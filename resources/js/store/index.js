import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);



export default new Vuex.Store({
    strict: true,

    state: {
        Sheet: {},
        Charisma: 5


    },

    getters: {
        getPlayerCharacterSheet(state) {
            return state.Sheet
        }
    },

    actions: {
        getSheetsFromDataBase(context) {

             axios.post('/sheet')

                .then((response)=>{
                    console.log(response.data.sheets)
                    context.commit("sheets", response.data.sheets) // sheets will be run from mutations
                })

        }
    },

    mutations: {
        sheets(state, data) {


            return state.Sheet = data
        }
    }
});
