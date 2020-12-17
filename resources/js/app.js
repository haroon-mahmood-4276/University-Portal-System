import Vue from 'vue';
import {
    BootstrapVue,
    IconsPlugin
} from 'bootstrap-vue';
import VueRoutes from './router';
import vueapp from "./components/App.vue";

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: {
        vueapp
    },
    VueRoutes
});
