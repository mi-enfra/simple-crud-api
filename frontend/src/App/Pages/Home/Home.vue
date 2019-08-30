<template>
  <div class="home">
    <img alt="Vue logo" src="@/assets/logo.png"
        v-on:click="camelcaseTest()">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
import HelloWorld from './HomeHelloWorld.vue'

export default {
    name: 'home',
    components: {
        HelloWorld
    },
    methods: {
        camelcaseTest () {
            let camelCaseTest = 'Is working!'
            console.log(camelCaseTest)
        }
    }
}
</script>
