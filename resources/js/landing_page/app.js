import Vue from 'vue'
import App from './App.vue'

require('./mixins/index')
new Vue({
    render: h => h(App)
}).$mount('#app')