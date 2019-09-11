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
                path: '/project-euler',
                name: 'project-euler',
                component: () => import(
                    /* webpackChunkName: "project-euler" */
                    './Pages/ProjectEuler/ProjectEuler.vue'
                ),
                meta: {
                    title: 'Project Euler'
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
            }, {
                path: '/task',
                name: 'task',
                component: () => import(
                    /* webpackChunkName: "task" */
                    './Pages/Task/Task.vue'
                ),
                meta: {
                    title: 'Task'
                }
            }, {
                path: '/ping',
                name: 'ping',
                component: () => import(
                    /* webpackChunkName: "ping" */
                    './Pages/Ping/Ping.vue'
                ),
                meta: {
                    title: 'Ping'
                }
            }, {
                path: '/bookmark',
                name: 'bookmark',
                component: () => import(
                    /* webpackChunkName: "bookmark" */
                    './Pages/Bookmark/Bookmark.vue'
                ),
                meta: {
                    title: 'Bookmark'
                }
            }
        ]
    }
)
