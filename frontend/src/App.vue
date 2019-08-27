<template>
    <div class="section" id="app">
        <Task v-bind:tasks="tasks"></Task>
    </div>
</template>

<script>
import Task from './components/Task/Task.vue';

export default {
    name: 'app',
    components: {
        Task,
    },
    data() {
        return {
            tasks: [
                {
                    title: 'Task A',
                    status: 'done',
                },
                {
                    title: 'Task B',
                    status: 'todo',
                },
                {
                    title: 'Task C',
                    status: 'doing',
                },
            ],
        };
    },
};
</script>
