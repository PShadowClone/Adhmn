require('./bootstrap');
require('./components/components');

import Vue from 'vue'
import router from './route/index'
import App from './App.vue'

Vue.config.productionTip = false

Vue.component('App', App)
/**
 * initialize app instance
 * @author Amr
 */
new Vue({
    // el: '#app',
    router,
    render: h => h(App)
    // template: `<App/>`
}).$mount('#app');
