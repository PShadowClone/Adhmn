import Vue from 'vue'
import page from './page'
import alert from './alert'
import VueGoodTablePlugin from 'vue-good-table';
import 'vue-good-table/dist/vue-good-table.css'
import {VueGoodTable} from 'vue-good-table';
import Paginate from 'vuejs-paginate'
import TableOperations from './tableOperations'
// import quill from 'vue-'
import VueQuill from 'vue-quill'
import Loader from './loader'

Vue.use(VueQuill)
Vue.component('paginate', Paginate)
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)
Vue.use(VueGoodTablePlugin);
Vue.component('page', page)
Vue.component('alert', alert)
Vue.component('Loader', Loader)
Vue.component('VueGoodTable', VueGoodTable)
Vue.component('TableOperations', TableOperations)
// Vue.component('quill', quill)
