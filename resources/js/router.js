import Vue from 'vue';
import VueRouter from "vue-router";
import VIndex from "./components/Index.vue";
import VAdminLogin from "./components/AdminLogin.vue";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [{
            path: '/',
            name: 'index',
            component: VIndex
        },
        {
            path: '/admin/login',
            name: 'adminlogin',
            component: VAdminLogin
        },
    ],
    mode: 'history'
});
