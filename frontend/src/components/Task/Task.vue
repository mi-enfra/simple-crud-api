<template>
    <div class="container">
        <h1 class="title is-size-1">Tasks</h1>
        <div class="columns">
            <div class="column is-4">
                <task-backlog
                    v-bind:tasks="tasks.list">
                </task-backlog>
            </div>
            <!-- <div class="column is-4">
                <Doing></Doing>
            </div> -->
        </div>
    </div>
</template>

<script>
import TaskBacklog from './TaskBacklog.vue';
// import Doing from './Doing/Doing.vue';
import TaskStore from './TaskDatastore.vue';

export default {
    name: 'Task',
    components: {
        TaskBacklog,
        // Doing,
    },
    props: [],
    data() {
        return {
            tasks: TaskStore,
        };
    },
};
</script>
