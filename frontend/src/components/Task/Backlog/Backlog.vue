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
            <task-card
                v-for="(task, index) in tasks"
                v-bind:task="task"
                v-bind:key="index"
                v-on:edit="edit"
                v-on:show="show">
            </task-card>
        </draggable>
    </div>
</template>

<script>
import draggable from 'vuedraggable';
import TaskCard from './TaskCard/TaskCard.vue';

export default {
    name: 'Backlog',
    components: {
        draggable,
        TaskCard,
    },
    props: ['tasks'],
    methods: {
        edit(id) {
            this.$emit('edit', id);
        },
        show(id) {
            console.log(id);
            this.$emit('show', id);
        },
    },
};
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
