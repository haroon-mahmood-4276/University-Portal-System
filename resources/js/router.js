import Vue from 'vue';
import VueRouter from "vue-router";
import VIndex from "./components/Index.vue";

Vue.use(VueRouter);

export default new VueRouter({
    hashbang: false,
    routes: [{
            path: '/',
            name: 'index',
            component: VIndex
        },
    ],
    //mode: 'history'
});
