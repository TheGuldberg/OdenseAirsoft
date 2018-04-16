
require('./bootstrap');

import VueRouter from 'vue-router';

import Home from './components/Home.vue';
import Information from './components/Information.vue';
import Gallery from './components/Gallery.vue';
import Membership from './components/Membership.vue';
import Calendar from './components/Calendar.vue';
import Contact from './components/Contact.vue';

window.Vue = require('vue');

Vue.use(VueRouter);

const routes = [
    {path: '/', component: Home},
    {path: '/information', component: Information},
    {path: '/gallery', component: Gallery},
    {path: '/membership', component: Membership},
    {path: '/calendar', component: Calendar},
    {path: '/contact', component: Contact},
];

const router = new VueRouter({mode: 'history', routes});

const app = new Vue({el: '#app', router});
