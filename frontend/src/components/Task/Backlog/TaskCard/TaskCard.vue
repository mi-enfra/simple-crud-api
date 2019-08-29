<template>
    <div class="card is-clearfix">
        <header class="card-header">
            <a href="#" class="card-header-icon"
                v-if="!task.is_editting"
                v-on:click="$emit('show', task.id)">
                <font-awesome-icon icon="chevron-down"
                    v-if="!task.is_shown">
                </font-awesome-icon>
                <font-awesome-icon icon="chevron-up"
                    v-else>
                </font-awesome-icon>
            </a>
            <p class="card-header-title">
                <input class="input" :disabled="!task.is_editting"
                    v-model="task.title">
            </p>
            <a href="#" class="card-header-icon"
                v-on:click="$emit('editEnable', task.id)">
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
</template>

<script>
export default {
    name: 'TaskCard',
    props: ['task'],
};
</script>

<style lang="scss" scoped>
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
