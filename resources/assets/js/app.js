/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import BootstrapVue from "bootstrap-vue"



Vue.use(BootstrapVue)

import VueAxios from 'vue-axios';
import Axios from 'axios';
Vue.use(VueAxios, Axios);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('header-menu', require('./components/Header.vue'));
Vue.component('left-preview', require('./components/LeftPreview.vue'));
Vue.component('right-preview', require('./components/RightPreview.vue'));
Vue.component('admin-menu', require('./components/AdminMenu.vue'));
Vue.component('PageForm', require('./components/PageForm.vue'));
Vue.component('news', require('./components/News.vue'));
Vue.component('contact', require('./components/Contact.vue'));
Vue.component('header-section', require('./components/HeaderSection.vue'));




const app = new Vue({
    el: '#app',

});