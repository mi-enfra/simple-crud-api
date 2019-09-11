<template>
    <div id="app">
        <navigation v-bind:navigation-links="this.links"></navigation>
        <router-view class="section"></router-view>
    </div>
</template>

<script>
import Navigation from './AppNavigation.vue'

export default {
    name: 'App',
    components: {
        Navigation
    },
    data () {
        return {
            links: [
                {
                    text: 'Home',
                    destination: '/'
                }, {
                    text: 'Bookmarks',
                    destination: '/bookmark'
                }, {
                    text: 'Project Euler',
                    destination: '/project-euler'
                }, {
                    text: 'Tasks',
                    destination: '/task'
                }, {
                    text: 'About',
                    destination: '/about'
                }, {
                    text: 'Ping',
                    destination: '/ping'
                }
            ]
        }
    },
    watch: {
        $route (to, from) {
            let title = 'Marvin\'s Laboratory'
            if (to.meta.title !== undefined || to.meta.title !== '') {
                title += ' | ' + to.meta.title
            }
            document.title = title
        }
    }
}
</script>
