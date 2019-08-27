<template>
    <div class="container">
        <h1 class="title is-size-1">Tasks</h1>
        <div class="columns">
            <div class="column is-4">
                <Backlog v-bind:tasks="tasks"></Backlog>
            </div>
            <div class="column is-4">
                <Doing></Doing>
                <!-- <Doing v-bind:tasks="tasks"></Doing> -->
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
    props: ['tasks'],
};
</script>

<style scoped lang="scss">
    .table {
        thead {
            tr {
                th {
                    text-align: center;
                }
            }
        }
        tbody {
            tr {
                td {
                    input:disabled {
                        background: white;
                        border: none;
                        color: initial;
                        cursor: default;
                    }
                }
            }
        }
    }
</style>
