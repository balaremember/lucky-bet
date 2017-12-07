/**
 * Created by ruslantagirov on 14.10.2017.
 */
import VueRouter from 'vue-router';

let routes;
routes = [
    {
        path: '/',
        components: {
            board: require('./components/Onboarding.vue'),
            left: require('./components/LeftSidebar.vue'),
            right: require('./components/RightSidebar.vue'),
            footer: require('./components/Footer.vue'),
            header: require('./components/Header.vue'),
            listOfEvents: require('./components/ListOfEvents.vue')
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
            home: require('./components/Authorization.vue'),
            header: require('./components/Header.vue'),
        }
    },

    {
        path: '/404', components: {
            header: require('./components/Header.vue'),
            error: require('./components/NotFound.vue'),
        }
    },

    {
        path: '/*', redirect: "/404"
    }
];

export default new VueRouter({
    mode: 'history',
    routes: routes,

});
