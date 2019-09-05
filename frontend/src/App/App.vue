<template>
    <div id="app">
        <navigation v-bind:navigation-links="this.links"></navigation>
        <router-view></router-view>
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
                    text: 'Tasks',
                    destination: '/'
                }, {
                    text: 'About',
                    destination: '/about'
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
