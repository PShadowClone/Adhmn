import Vue from 'vue'
import VueRouter from 'vue-router'
import {routes} from './routes'

Vue.use(VueRouter)

/**
 * initialize vue router instance
 *
 * @type {VueRouter}
 */
const router = routerInstance(window.location.origin + '/admin');

function routerInstance(base) {
    const router = new VueRouter({
        mode: 'history',
        routes
    })
    router.beforeEach(beforeEach)
    return router;
}

/**
 * Global router guard.
 *
 * @param {Route} to
 * @param {Route} from
 * @param {Function} next
 */
async function beforeEach(to, from, next) {
    if (to.meta.layout == undefined) {
        document.layout = 'Dashboard';
    } else {
        document.layout = to.meta.layout;
    }
    if (to.meta.layout != 'auth') {
        let result = window.storageManager.checkToken()
        if (!result)
            next('admin/login');
    } else {
        let result = window.storageManager.checkToken()
        if (!result)
            next('admin/login');
    }
    next()
}


/**
 * publish the router
 */
export default router;
