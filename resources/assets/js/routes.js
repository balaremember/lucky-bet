/**
 * Created by ruslantagirov on 14.10.2017.
 */
import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        components: {
            board: require('./components/Onboarding.vue'),
            left: require('./components/LeftSidebar.vue'),
            right: require('./components/RightSidebar.vue'),
            footer: require('./components/Footer.vue'),
            header: require('./components/Header.vue'),

        }
    },
    {
        path: '/reg',
        components: {
            header: require('./components/Header.vue'),
            registration: require('./components/Registration.vue'),

        }
    },
    {
        path: '/login',
        components: {
            home: require('./components/Home.vue'),
            header: require('./components/Header.vue'),
        }
    }
];

export default new VueRouter({
    mode: 'history',
    routes: routes,

});
