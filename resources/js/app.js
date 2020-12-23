import Vue from 'vue';
import {
    BootstrapVue,
    IconsPlugin
} from 'bootstrap-vue';

import VueRoutes from './router';
import VueAxios from 'vue-axios'
import Axios from 'axios'

import vueapp from "./components/App.vue";

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.use(VueAxios, Axios)

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: {
        vueapp
    },
    // router: router
    router: VueRoutes

});
