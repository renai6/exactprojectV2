
import Vue from 'vue'
import App from './App'
import Vuex from 'vuex'
import store from "Store/store";


Vue.config.productionTip = false

Vue.use(Vuex)

const app = new Vue({
  store,
  render: h => h(App)
}).$mount('#app')


