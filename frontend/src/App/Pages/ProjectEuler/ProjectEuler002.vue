<template>
    <div class="box">
        <h2 class="title is-size-6">#2 Even Fibonacci numbers</h2>
        <p>Solution: {{ solution(4000000) }}</p>
    </div>
</template>

<script>
export default {
    name: 'Solution002',
    methods: {
        solution (limit) {
            let previous = 1
            let current = 2
            let sum = 0
            while (limit > current) {
                if (current % 2 === 0) {
                    sum += current
                }
                let next = previous + current
                previous = current
                current = next
                limit--
            }
            return this.format(sum)
        },
        format (number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',')
        }
    }
}
</script>
