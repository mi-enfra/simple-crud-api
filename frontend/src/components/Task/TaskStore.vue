<script>
export default {
    debug: true,
    list: [
        {
            id: 1,
            title: 'Lorem',
            description: 'Contrary to popular belief, Lorem Ipsum is not simply random text. Contrary to popular belief, Lorem Ipsum is not simply random text. Contrary to popular belief, Lorem Ipsum is not simply random text. ',
            is_editting: false,
            is_shown: false,
        }, {
            id: 2,
            title: 'Ipsum',
            description: 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.',
            is_editting: false,
            is_shown: false,
        }, {
            id: 3,
            title: 'Dolor',
            description: 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            is_editting: false,
            is_shown: false,
        },
    ],
    editEnable(id) {
        const index = this.list.findIndex(task => task.id === id);
        this.list[index].is_editting = !this.list[index].is_editting;
    },
    show(id) {
        const index = this.list.findIndex(task => task.id === id);
        this.list[index].is_shown = !this.list[index].is_shown;
    },
};
</script>
