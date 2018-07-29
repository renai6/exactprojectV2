
import Vue from 'vue'
import App from './App'
import Vuex from 'vuex'
import store from "Store/store";

Vue.config.productionTip = false

Vue.component('greetings', App)

const app = new Vue({
  el:'#app'
})


