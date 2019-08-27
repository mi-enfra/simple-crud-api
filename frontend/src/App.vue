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
            tasks:
                [
                    {
                        title: 'Lorem',
                        description: 'Contrary to popular belief, Lorem Ipsum is not simply random text. Contrary to popular belief, Lorem Ipsum is not simply random text. Contrary to popular belief, Lorem Ipsum is not simply random text. ',
                        editting: 0,
                        status: 'done',
                    }, {
                        title: 'Ipsum',
                        description: 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.',
                        editting: 1,
                        status: 'todo',
                    }, {
                        title: 'Dolor',
                        description: 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                        editting: 1,
                        status: 'doing',
                    },
                ],
        };
    },
};
</script>
