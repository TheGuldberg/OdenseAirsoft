
import "./bootstrap";
import VueRouter from 'vue-router';

import anime from 'animejs'
import 'bxslider';

import Home from './pages/Home.vue';
import Information from './pages/Information.vue';
import News from './pages/News.vue';
import Gallery from './pages/Gallery.vue';
import Membership from './pages/Membership.vue';
import Calendar from './pages/Calendar.vue';
import Contact from './pages/Contact.vue';

window.Vue = require('vue');

Vue.use(VueRouter);

const routes = [
    {path: '/home', component: Home},
    {path: '/information', component: Information},
    {path: '/news', component: News},
    {path: '/gallery', component: Gallery},
    {path: '/membership', component: Membership},
    {path: '/calendar', component: Calendar},
    {path: '/contact', component: Contact},
];

const router = new VueRouter({mode: 'history', routes});

const app = new Vue({el: '#app', router});

$('.slider').bxSlider({
    keyboardEnabled: true,
    auto: true,
    nextText: '<i class="fas fa-chevron-circle-right"></i>',
    prevText: '<i class="fas fa-chevron-circle-left"></i>',
    buildPager: (index) => {     
        return '<i class="fas fa-circle"></i>'
    }
});