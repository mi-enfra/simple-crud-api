<template>
    <div class="box">
        <h2 class="title is-size-6">Multiples of 3 and 5</h2>
        <p>Example: {{ solution(10) }}</p>
        <p>Problem: {{ solution(1000) }}</p>
    </div>
</template>

<script>
export default {
    name: 'Solution001',
    methods: {
        solution (limit) {
            let sum = 0
            while (limit > 0) {
                limit--
                if (limit % 3 === 0 || limit % 5 === 0) {
                    sum += limit
                }
            }
            return this.format(sum)
        },
        format (number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',')
        }
    }
}
</script>
