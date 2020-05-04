import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import store from './store';
require('./bootstrap');

window.Vue = require('vue');


Vue.use(VueRouter);

let app = new Vue({
    el: '#app',
    
    store: store,
    router: new VueRouter(routes),

});

