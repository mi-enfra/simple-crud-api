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
                        backgroundColor: 'transparent',
                        borderColor: '#000',
                        label: 'Google Ping',
                        pointRadius: 0
                    }
                ]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true
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
