<template>
    <div id="app">
        <navigation></navigation>
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

<style lang="scss" scoped>
#app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
}
#nav {
    padding: 30px;
    a {
        font-weight: bold;
        color: #2c3e50;
        &.router-link-exact-active {
        color: #42b983;
        }
    }
}
</style>
