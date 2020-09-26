import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

const routes = [
	{path :'/', component : require('./components/Content.vue').default},
	{path :'/home', component : require('./components/Content.vue').default},
	{path :'/about', component : require('./components/About.vue').default},
	{path :'/sample-post/:slug', component : require('./components/SamplePost.vue').default},
	{path :'/contact', component : require('./components/Contact.vue').default},
	{path :'/login-form', component : require('./components/Login.vue').default},
	{path :'/user/profile/:name', component : require('./components/Profile.vue').default},
	{path :'/create-post', component : require('./components/CreatePost.vue').default},
	{path :'*', component : require('./components/NotFound.vue').default},
];

let router = new Router({
	mode : 'history',
	routes
});

export default router;
