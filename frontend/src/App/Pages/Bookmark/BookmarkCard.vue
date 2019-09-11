<template>
    <div class="box">
        <a v-bind:href="content.link">
            <figure class="image is-16by9">
                <img src="https://dummyimage.com/16:9x480">
            </figure>
            <div class="content">
                <p>{{ content.title }}</p>
            </div>
        </a>
    </div>
</template>

<script>
export default {
    props: {
        content: Object
    }
}
</script>

<style lang="scss" scoped>
.box {
    overflow: hidden;
    padding: 0;
    a {
        color: initial;
        .content {
            line-height: 1.5em;
            padding: 0.75em 1.5em;
        }
    }
}
</style>
