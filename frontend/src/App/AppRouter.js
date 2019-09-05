import Vue from 'vue'
import Router from 'vue-router'
import Home from './Pages/Home/Home.vue'

Vue.use(Router)

export default new Router(
    {
        mode: 'history',
        base: process.env.BASE_URL,
        routes: [
            {
                path: '/',
                name: 'home',
                component: Home,
                meta: {
                    title: 'Home'
                }
            }, {
                path: '/about',
                name: 'about',
                component: () => import(
                    /* webpackChunkName: "about" */
                    './Pages/About/About.vue'
                ),
                meta: {
                    title: 'About'
                }
            }
        ]
    }
)
