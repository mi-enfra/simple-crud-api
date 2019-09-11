<template>
    <div>
        <div class="columns">
            <div class="column is-1">
                <div class="field">
                    <label class="label">Limit (secs)</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Limit in seconds"
                            v-model="limit">
                    </div>
                        <p class="help">{{ limit / 60 }} mins</p>
                </div>
                <div class="field">
                    <button class="button is-danger is-small"
                        v-on:click="clearHistory()">
                        Clear History
                    </button>
                </div>
            </div>
            <div class="column is-11">
                <chart
                    v-if="this.awsData.length > 0 || this.googleData.length > 0"
                    v-bind:aws-data="this.awsData"
                    v-bind:google-data="this.googleData"
                    v-bind:labels="this.labels">
                </chart>
            </div>
        </div>
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
            awsData: [],
            googleData: [],
            limit: 120
        }
    },
    created () {
        setInterval(this.runPing, 1000)
    },
    methods: {
        runPing () {
            if (this.counter <= this.limit) {
                this.labels.splice(0, 0, this.counter++)
            }
            this.Ping.ping('https://www.google.com', (err, data) => {
                if (err) {
                    data = -100
                }
                if (this.googleData.length > this.limit) {
                    this.googleData.shift()
                }
                this.googleData.push(data)
            })
            this.Ping.ping('https://aws.amazon.com', (err, data) => {
                if (err) {
                    data = -100
                }
                if (this.awsData.length > this.limit) {
                    this.awsData.shift()
                }
                this.awsData.push(data)
            })
            console.log(this.awsData.length)
            console.log(this.googleData.length)
        },
        clearHistory () {
            this.counter = 0
            this.labels = []
            this.googleData = []
            this.awsData = []
        }
    }
}
</script>
