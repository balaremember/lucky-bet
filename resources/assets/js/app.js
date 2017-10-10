
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

var Vue = require('vue')
var VueMaterial = require('vue-material')

Vue.use(VueMaterial)

Vue.material.registerTheme('default',
    {
        primary:
            {
                color: 'indigo',
                hue: 300,
                textColor: 'white'
            },
        accent: 'red',

    });

// !!!
// https://github.com/probil/v-mask

// As a plugin
import VueMask from 'v-mask'
Vue.use(VueMask);

// As a directive
import { VueMaskDirective } from 'v-mask'
Vue.directive('mask', VueMaskDirective);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('registration', require('./components/Registration.vue'));

const app = new Vue(
    {
        el: '#app'
    });
