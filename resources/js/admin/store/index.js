import Vue from 'vue'
import Vuex from 'vuex'
import Loader from './instance'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        Loader
    }
})