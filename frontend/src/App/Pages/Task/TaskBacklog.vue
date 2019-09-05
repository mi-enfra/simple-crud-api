<template>
    <div class="container">
        <h2 class="title is-size-5">Backlog</h2>
        <div class="buttons">
            <button class="button is-success">
                Add New &nbsp;
                <font-awesome-icon icon="plus"></font-awesome-icon>
            </button>
        </div>
        <draggable class="card-container">
            <task-backlog-card
                v-for="(task, index) in tasks"
                v-bind:task_detail="task"
                v-bind:key="index">
            </task-backlog-card>
        </draggable>
    </div>
</template>

<script>
import draggable from 'vuedraggable'
import TaskBacklogCard from './TaskBacklogCard.vue'

export default {
    name: 'Backlog',
    components: {
        draggable,
        TaskBacklogCard
    },
    props: ['tasks']
}
</script>

<style scoped lang="scss">
    .card-container {
        height: 100%;
        .card {
            header {
                p a {
                    color: initial;
                }
            }
        }
        .card + .card {
            margin-top: 1rem;
        }
    }
</style>
