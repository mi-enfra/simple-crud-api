<template>
    <div class="container">
        <h1 class="title">Project Euler</h1>
        <div class="columns is-multiline">
            <div class="column is-3">
                <solution001></solution001>
            </div>
        </div>
    </div>
</template>

<script>
import Solution001 from './ProjectEuler001.vue'

export default {
    name: 'project-euler',
    components: {
        Solution001
    }
}
</script>
