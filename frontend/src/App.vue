<template>
    <div class="section" id="app">
        <Task></Task>
    </div>
</template>

<script>
import Task from './components/Task/Task.vue';

export default {
    name: 'app',
    components: {
        Task,
    },
};
</script>

<style lang="scss" scoped>
    #app {
        max-height: 100vh;
    }
</style>
