/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
import VueMaterial from 'vue-material'

import VueMask from 'v-mask'    // As a plugin
Vue.use(VueMask);

import {VueMaskDirective} from 'v-mask'   // As a directive
Vue.directive('mask', VueMaskDirective);

Vue.use(VueRouter);
Vue.use(VueMaterial);

Vue.material.registerTheme('default',
    {
        primary: {
            color: 'indigo',
            hue: 300,
            textColor: 'white'
        },
        accent: 'red',

    });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('registration', require('./components/Registration.vue'));
Vue.component('home', require('./components/Home.vue'));
Vue.component('onboarding', require('./components/Onboarding.vue'));

var Home = require('./components/Home.vue');
var Registration = require('./components/Registration.vue');
var OnBoarding = require('./components/Onboarding.vue');
var LeftSidebar = require('./components/LeftSidebar.vue');
var RightSidebar = require('./components/RightSidebar.vue');

const router = new VueRouter({
    mode: 'history',
    routes:
        [
            {
                path: '/',
                components: {
                    default: Home,
                    board: OnBoarding,
                    left: LeftSidebar,
                    right: RightSidebar,

                }
            },
            {
                path: '/reg',
                components: {
                    registration: Registration,
                }
            }
        ]
});

const app = new Vue(
    {
        el: '#app',
        router: router,
    });
