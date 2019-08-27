<template>
    <div class="container">
        <h2 class="title is-size-5">Backlog</h2>
        <draggable>
            <div class="card is-clearfix"
                v-for="(task, index) in tasks"
                v-bind:task="task"
                v-bind:key="index">
                <header class="card-header">
                    <p class="card-header-title">
                        <input class="input" :disabled="task.editting === 1" v-model="task.title">
                    </p>
                    <a href="#" class="card-header-icon">
                        <font-awesome-icon icon="chevron-down"></font-awesome-icon>
                    </a>
                </header>
                <div class="card-content">
                    <div class="content">
                        <p>{{ task.description }}</p>
                    </div>
                    <div class="buttons are-small has-addons">
                        <button class="button">
                            <font-awesome-icon icon="edit"></font-awesome-icon>
                        </button>
                    </div>
                </div>
            </div>
        </draggable>
    </div>
</template>

<script>
import draggable from 'vuedraggable';

export default {
    name: 'Backlog',
    components: {
        draggable,
    },
    props: ['tasks'],
};
</script>

<style scoped lang="scss">
    .card {
        header {
            p input:disabled {
                background: initial;
                border: none;
                color: initial;
                cursor: default;
                font: inherit;
            }
        }
    }
</style>

<style scoped lang="scss">
    .card {
        header {
            p a {
                color: initial;
            }
        }
    }
    .card + .card {
        margin-top: 1em;
    }
</style>
