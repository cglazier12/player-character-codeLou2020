
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import store from './store'
import * as mutations from './store/mutation-types'
import * as actions from './store/action-types'
require('./bootstrap');

window.Vue = require('vue');

if (window.user) {
    store.commit(mutations.LOGGED_USER, window.user)
} else {
    store.dispatch(actions.LOGGED_USER)
}

Vue.use(VueRouter);

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});

