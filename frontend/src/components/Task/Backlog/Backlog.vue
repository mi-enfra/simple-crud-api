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
            <div class="card is-clearfix"
                v-for="(task, index) in tasks"
                v-bind:task="task"
                v-bind:key="index">
                <header class="card-header">
                    <a href="#" class="card-header-icon"
                        v-if="!task.is_editting"
                        v-on:click="$emit('show', index)">
                        <font-awesome-icon icon="chevron-down"
                            :flip="task.is_shown ? 'vertical' : ''">
                        </font-awesome-icon>
                    </a>
                    <p class="card-header-title">
                        <input class="input" :disabled="!task.is_editting"
                            v-model="task.title">
                    </p>
                    <a href="#" class="card-header-icon"
                        v-on:click="$emit('edit', index)">
                        <font-awesome-icon icon="edit"></font-awesome-icon>
                    </a>
                </header>
                <div class="card-content"
                    v-if="task.is_editting || task.is_shown">
                    <div class="content">
                        <textarea class="textarea" :disabled="!task.is_editting"
                            v-model="task.description">
                        </textarea>
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
        .card-header {
            .card-header-icon:first-of-type {
                color: initial;
            }
            p input:disabled {
                background: initial;
                border: none;
                color: initial;
                cursor: default;
                font: inherit;
            }
        }
        .card-content {
            .content textarea:disabled {
                background: initial;
                border: none;
                box-shadow: none;
                color: initial;
                cursor: initial;
                font: inherit;
                overflow-x: hidden;
                overflow-y: auto;
            }
        }
    }
</style>

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
