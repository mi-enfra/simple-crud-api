<template>
    <div class="container">
        <chart
            v-if="this.chartData.datasets[0].data.length > 0"
            v-bind:data="this.chartData.datasets[0].data"
            v-bind:labels="this.chartData.labels">
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
            chartData: {
                labels: [],
                datasets: [
                    {
                        label: 'Google Ping',
                        backgroundColor: '#000',
                        data: []
                    }
                ]
            }
        }
    },
    created () {
        setInterval(this.runPing, 1000)
    },
    methods: {
        runPing () {
            this.Ping.ping('https://google.com', (err, data) => {
                if (err) {
                    data = data + ' ' + err
                }
                this.chartData.labels.push(this.counter++)
                this.chartData.datasets[0].data.push(data)
            })
        }
    }
}
</script>
