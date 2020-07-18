import Vue from 'vue'
import Router from 'vue-router'
import feed from './components/pages/feed'
import index from './components/pages/index'
Vue.use(Router);

const routes = [
    {
        path: '/',
        component: feed
    }
];
export default new Router({
    mode:'history',
    routes
})