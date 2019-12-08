import Vue from 'vue'
import validate from './validate'
import axios from './axios'
import constants from './constants'
import storageManager from './storageManager'

Vue.mixin(validate)
Vue.mixin(axios)
Vue.mixin(constants)
Vue.mixin(storageManager)
