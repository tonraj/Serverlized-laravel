/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VueRouter from 'vue-router'; // importing Vue router library
import router from './routes';
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-default.css';

window.Vue = require('vue');

Vue.use(VueRouter);
Vue.use(VueToast);

const app = new Vue({
    el: '#app',
    router
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('select').materialSelect();
})
