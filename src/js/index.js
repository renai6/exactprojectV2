
import Vue from 'Vue'
import App from './App'


Vue.config.productionTip = false

const app = new Vue({
  render: h => h(App)
}).$mount('#app')


