import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
// import './assets/scss/styles.scss'
import axios from '../node_modules/axios/dist/axios.min.js'
Vue.prototype.$http = axios;

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
