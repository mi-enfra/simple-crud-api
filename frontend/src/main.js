import Vue from 'vue';
import App from './App.vue';
import '@/../node_modules/bulma/bulma.sass';
import './plugins/fontawesome';
import './styles/base.scss';

Vue.config.productionTip = false;

new Vue({
    render: h => h(App),
}).$mount('#app');
