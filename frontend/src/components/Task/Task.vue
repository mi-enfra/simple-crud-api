<template>
    <div class="container">
        <h1 class="title is-size-1">Tasks</h1>
        <div class="columns">
            <div class="column is-4">
                <Backlog
                    v-bind:tasks="tasks"
                    v-on:edit="editTask"
                    v-on:show="showTask">
                    </Backlog>
            </div>
            <div class="column is-4">
                <Doing></Doing>
            </div>
        </div>
    </div>
</template>

<script>
import Backlog from './Backlog/Backlog.vue';
import Doing from './Doing/Doing.vue';

export default {
    name: 'Task',
    components: {
        Backlog,
        Doing,
    },
    props: [],
    data() {
        return {
            tasks:
                [
                    {
                        title: 'Lorem',
                        description: 'Contrary to popular belief, Lorem Ipsum is not simply random text. Contrary to popular belief, Lorem Ipsum is not simply random text. Contrary to popular belief, Lorem Ipsum is not simply random text. ',
                        is_editting: false,
                        is_shown: false,
                    }, {
                        title: 'Ipsum',
                        description: 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.',
                        is_editting: false,
                        is_shown: false,
                    }, {
                        title: 'Dolor',
                        description: 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                        is_editting: false,
                        is_shown: false,
                    },
                ],
        };
    },
    methods: {
        editTask(index) {
            this.tasks[index].is_editting = !this.tasks[index].is_editting;
        },
        showTask(index) {
            this.tasks[index].is_shown = !this.tasks[index].is_shown;
        },
    },
};
</script>
