import Vue from 'vue'
import VueRouter from 'vue-router'
import { routes } from './routes'

Vue.use(VueRouter)

/**
 * initialize vue router instance
 *
 * @type {VueRouter}
 */
const router = new VueRouter({
    mode: 'history',
    routes,

})


/**
 * publish the router
 */
export default router;
