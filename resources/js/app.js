require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import {routes} from './router/routes';
import MainApp from './components/MainApp.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    routes,
    mode: 'history'
});

const app = new Vue({
    el: '#app',
    router,
    components: {
        MainApp
    }
});
