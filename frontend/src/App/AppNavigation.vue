<template>
    <div id="nav" class="buttons">
        <router-link to="/" class="button">Home</router-link>
        <router-link to="/about" class="button">About</router-link>
    </div>
</template>

<script>
export default {
    name: 'Navigation'
}
</script>

<style lang="scss" scoped>
@import '../../node_modules/bulma/bulma.sass';

#nav {
    .router-link-exact-active {
        @extend .is-success
    }
}
</style>
