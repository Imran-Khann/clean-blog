require('./bootstrap');

import Vue from 'vue';
import router from './router.js';


Vue.component('App', require('./components/App.vue').default);

new Vue({
	el : "#app",
	router
});
