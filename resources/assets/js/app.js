require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import NProgress from 'vue-nprogress';
import Element from 'element-ui';
Vue.use(VueRouter);
Vue.use(NProgress);
Vue.use(Element);
import {routes} from './routes.js';
const router = new VueRouter({
    routes
})
const nprogress = new NProgress( {parent: 'body'} );
import MainApp from './components/Main.vue';
const app = new Vue({
    el: '#app',
    router,
    nprogress,
    components:{ MainApp }
});
