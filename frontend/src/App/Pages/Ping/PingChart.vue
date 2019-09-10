<script>
import { Line } from 'vue-chartjs'

export default {
    extends: Line,
    props: {
        data: Array,
        labels: Array
    },
    data () {
        return {
            chartdata: {
                labels: this.labels,
                datasets: [
                    {
                        label: 'Google Ping',
                        backgroundColor: '#000',
                        data: this.data
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        }
    },
    watch: {
        data () {
            this.$data._chart.update()
        }
    },
    mounted () {
        this.renderChart(this.chartdata, this.options)
    }
}
</script>
