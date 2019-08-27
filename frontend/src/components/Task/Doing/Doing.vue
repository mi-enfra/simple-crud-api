<template>
    <div class="container">
        <h2 class="title is-size-5">Doing</h2>
        <div class="box">
            <table class="table">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(task, index) in tasks"
                        v-bind:task="task"
                        v-bind:key="index">
                        <td>
                            <input class="input" type="text" disabled
                                v-bind:value="task.title">
                        </td>
                        <td>
                            <button class="button" v-if="task.status === 'todo'">
                                <font-awesome-icon icon="calendar"></font-awesome-icon>
                            </button>
                            <button class="button" v-else-if="task.status === 'doing'">
                                <font-awesome-icon pulse icon="spinner"></font-awesome-icon>
                            </button>
                            <button class="button is-success" v-else>
                                <font-awesome-icon icon="check"></font-awesome-icon>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Doing',
    props: ['tasks'],
};
</script>

<style scoped>

</style>
