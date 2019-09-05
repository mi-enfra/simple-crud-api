import Vue from 'vue'
import App from './App/App.vue'
import router from './App/AppRouter'
import './styles/global.scss'
import './plugins/fontawesome'

Vue.config.productionTip = false

new Vue({
    router,
    render: h => h(App)
}).$mount('#app')
