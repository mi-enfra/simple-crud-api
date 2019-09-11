import Vue from 'vue'
import App from './App/App.vue'
import router from './App/AppRouter'
import VueMasonry from 'vue-masonry-css'
import './styles/global.scss'
import './plugins/fontawesome'

Vue.config.productionTip = false
Vue.use(VueMasonry)

new Vue({
    router,
    render: h => h(App)
}).$mount('#app')
