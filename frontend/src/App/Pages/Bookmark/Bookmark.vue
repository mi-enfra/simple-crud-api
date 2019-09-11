<template>
    <div class="container">
        <h1 class="title">Bookmarks</h1>
        <masonry
            v-bind:cols="{
                default: 4,
                1023: 2,
                767: 1
            }"
            v-bind:gutter="{
                default: 30,
                1023: 20,
                767: 10
            }">
            <bookmark-card
                v-for="(box, index) in this.boxes"
                v-bind:key="index"
                v-bind:content="box">
            </bookmark-card>
        </masonry>
    </div>
</template>

<script>
import BookmarkCard from './BookmarkCard.vue'

export default {
    components: {
        BookmarkCard
    },
    data () {
        return {
            boxes: [
                {
                    title: 'Short Title 001',
                    link: 'https://google.com'
                }, {
                    title: 'Short Title 002',
                    link: 'https://google.com'
                }, {
                    title: 'Longer Title Which Does Not Mean Anything 001',
                    link: 'https://google.com'
                }, {
                    title: 'Short Title 003',
                    link: 'https://google.com'
                }, {
                    title: 'Short Title 004',
                    link: 'https://google.com'
                }, {
                    title: 'Longer Title Which Does Not Mean Anything 002',
                    link: 'https://google.com'
                }, {
                    title: 'Longer Title Which Does Not Mean Anything 003',
                    link: 'https://google.com'
                }, {
                    title: 'Longer Title Which Does Not Mean Anything 004',
                    link: 'https://google.com'
                }, {
                    title: 'Short Title 005',
                    link: 'https://google.com'
                }, {
                    title: 'Short Title 006',
                    link: 'https://google.com'
                }
            ]
        }
    }
}
</script>
