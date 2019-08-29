<template>
    <div class="card is-clearfix">
        <div v-if="!task.is_editting">
            <header class="card-header">
                <a href="#" class="card-header-icon"
                    v-on:click="descriptionToggle()" >
                    <font-awesome-icon icon="chevron-down"
                        v-if="!task.is_shown">
                    </font-awesome-icon>
                    <font-awesome-icon icon="chevron-up"
                        v-else>
                    </font-awesome-icon>
                </a>
                <p class="card-header-title"
                    v-on:click="descriptionToggle()">
                    {{ task.title }}
                </p>
                <a href="#" class="card-header-icon"
                    v-on:click="editToggle()">
                    <font-awesome-icon icon="pen-square"></font-awesome-icon>
                </a>
            </header>
            <div class="card-content"
                v-if="task.is_shown">
                <div class="content"
                    v-html="task.description">
                </div>
            </div>
        </div>
        <div v-else>
            <header class="card-header">
                <a href="#" class="card-header-icon"
                    v-on:click="descriptionToggle()">
                    <font-awesome-icon icon="chevron-down"
                        v-if="!task.is_shown">
                    </font-awesome-icon>
                    <font-awesome-icon icon="chevron-up"
                        v-else>
                    </font-awesome-icon>
                </a>
                <p class="card-header-title">
                    <input class="input"
                        v-model="form.title">
                </p>
                <a href="#" class="card-header-icon has-text-success"
                    v-on:click="editSave()">
                    <font-awesome-icon icon="save"></font-awesome-icon>
                </a>
                <a href="#" class="card-header-icon has-text-danger"
                    v-on:click="editCancel()">
                    <font-awesome-icon icon="times-circle"></font-awesome-icon>
                </a>
            </header>
            <div class="card-content">
                <div class="content">
                    <textarea class="textarea" v-bind:rows="estimateTextareaHeight()"
                        v-model="form.description">
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'TaskBacklogCard',
    props: ['task_detail'],
    data() {
        return {
            task: {
                id: this.task_detail.id,
                title: this.task_detail.title,
                description: this.task_detail.description.replace(/(\r\n|\r|\n)/g, '<br/>'),
                is_shown: false,
                is_editting: false,
            },
            form: {
                title: this.task_detail.title,
                description: this.task_detail.description,
            },
        };
    },
    methods: {
        descriptionToggle() {
            this.task.is_shown = !this.task.is_shown;
        },
        estimateTextareaHeight() {
            const chars = this.form.description.length / 45;
            const breaks = (this.form.description.match(/(\r\n|\r|\n)/g) || []).length - 1;
            return chars + breaks;
        },
        editToggle() {
            this.task.is_editting = !this.task.is_editting;
        },
        editCancel() {
            this.form.title = this.task.title;
            this.form.description = this.task.description;
            this.editToggle();
        },
        editSave() {
            this.task.title = this.form.title;
            this.task.description = this.form.description.replace(/(\r\n|\r|\n)/g, '<br/>');
            this.editToggle();
        },
    },
};
</script>

<style lang="scss" scoped>
    .card {
        .card-header {
            .card-header-icon {
                color: initial;
            }
            p {
                cursor: pointer;
            }
        }
    }
</style>
