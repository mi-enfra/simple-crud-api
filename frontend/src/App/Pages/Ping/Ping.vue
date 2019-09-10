<template>
    <div class="container">
        <chart
            v-if="this.googleData.length > 0"
            v-bind:google-data="this.googleData"
            v-bind:labels="this.labels">
        </chart>
    </div>
</template>

<script>
import Ping from 'ping.js'
import Chart from './PingChart'

export default {
    name: 'Ping',
    components: {
        Chart
    },
    data () {
        return {
            Ping: new Ping(),
            counter: 0,
            labels: [],
            googleData: []
        }
    },
    created () {
        setInterval(this.runPing, 1000)
    },
    methods: {
        runPing () {
            this.Ping.ping('https://google.com', (err, data) => {
                let limit = 120
                if (err) {}
                if (this.counter <= limit) {
                    this.labels.splice(0, 0, this.counter++)
                }
                if (this.googleData.length > limit) {
                    this.googleData.shift()
                }
                this.googleData.push(data)
            })
        }
    }
}
</script>
