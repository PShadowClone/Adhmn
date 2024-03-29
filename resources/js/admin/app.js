require('./bootstrap');
require('./components/components');
require('./plugins/index')
require('./mixins/index')

import Vue from 'vue'
import router from './route/index'
import App from './App.vue'
import store from "./store/index";


Vue.config.productionTip = false

Vue.component('App', App)
window.vue = Vue;


/**
 * initialize app instance
 * @author Amr
 */
new Vue({
    // el: '#app',
    store,
    router,
    render: h => h(App)
}).$mount('#app');
