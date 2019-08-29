<template>
    <div class="container">
        <h1 class="title is-size-1">Tasks</h1>
        <div class="columns">
            <div class="column is-4">
                <Backlog
                    v-bind:tasks="tasks.list"
                    v-on:edit="edit"
                    v-on:show="show">
                    </Backlog>
            </div>
            <!-- <div class="column is-4">
                <Doing></Doing>
            </div> -->
        </div>
    </div>
</template>

<script>
import Backlog from './Backlog/Backlog.vue';
// import Doing from './Doing/Doing.vue';
import TaskStore from './TaskStore.vue';

export default {
    name: 'Task',
    components: {
        Backlog,
        // Doing,
    },
    props: [],
    data() {
        return {
            tasks: TaskStore,
        };
    },
    methods: {
        edit(id) {
            TaskStore.edit(id);
        },
        show(id) {
            TaskStore.show(id);
        },
    },
};
</script>
