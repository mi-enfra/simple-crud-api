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
                        <p class="help">Or {{ limit / 60 }} min(s)</p>
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
                    v-if="this.googleData.length > 0"
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
import { debounce } from 'debounce'

export default {
    name: 'Ping',
    components: {
        Chart
    },
    data () {
        return {
            Ping: new Ping(),
            labels: [],
            googleData: [],
            limit: 120
        }
    },
    created () {
        setInterval(this.runPing, 1000)
        while (this.googleData.length <= this.limit) {
            this.googleData.splice(0, 0, 0)
            this.labels.splice(0, 0, this.googleData.length - 1)
        }
    },
    methods: {
        runPing () {
            this.Ping.ping('https://www.google.com', (err, data) => {
                if (err) { data = -100 }
                if (this.googleData.length > this.limit) { this.googleData.shift() }
                this.googleData.push(data)
            })
        },
        clearHistory () {
            this.googleData.forEach((ping, index) => {
                this.googleData[index] = 0
            })
        },
        updateLimit:
            debounce(function () {
                let limit = parseInt(this.limit)
                if (limit > this.googleData.length) {
                    while (this.googleData.length < limit) {
                        this.googleData.splice(0, 0, 0)
                        this.labels.splice(0, 0, this.googleData.length)
                    }
                }
                if (limit < this.googleData.length) {
                    while (this.googleData.length > limit + 1) {
                        this.googleData.shift()
                    }
                    while (this.labels.length > limit + 1) {
                        this.labels.shift()
                    }
                }
            }, 500)
    },
    watch: {
        limit () {
            this.updateLimit()
        }
    }
}
</script>
