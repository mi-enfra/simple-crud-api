<template>
    <div class="container">
        <h1 class="title">Project Euler</h1>
        <div class="columns is-multiline">
            <div class="column is-3">
                <solution001></solution001>
            </div>
            <div class="column is-3">
                <solution002></solution002>
            </div>
        </div>
    </div>
</template>

<script>
import Solution001 from './ProjectEuler001.vue'
import Solution002 from './ProjectEuler002.vue'

export default {
    name: 'project-euler',
    components: {
        Solution001,
        Solution002
    }
}
</script>
