<script>
import { Line } from 'vue-chartjs'

export default {
    extends: Line,
    props: {
        labels: Array,
        googleData: Array
    },
    data () {
        return {
            chartdata: {
                labels: this.labels,
                datasets: [
                    {
                        data: this.googleData,
                        backgroundColor: '#fff',
                        borderColor: '#000',
                        fill: true,
                        label: 'Google Ping',
                        pointRadius: 0,
                        steppedLine: 'middle'
                    }
                ]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Seconds ago'
                        },
                        ticks: {
                            callback: function (dataLabel, index) {
                                return index % 10 === 0 ? dataLabel : ''
                            }
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Ping in ms'
                        },
                        ticks: {
                            stepSize: 100,
                            suggestedMin: 0,
                            suggestedMax: 200
                        }
                    }]
                }
            }
        }
    },
    watch: {
        googleData () {
            this.$data._chart.update()
        }
    },
    mounted () {
        this.renderChart(this.chartdata, this.options)
    }
}
</script>
