import storageManager from '@/mixins/storageManager'

/**
 * check if user has a valid token or not
 *
 * @param to
 * @param from
 * @param next
 * @author Amr
 */
export default (to, from, next) => {
    if (window.storageManager.checkToken()) {
        next();
    } else {
        localStorage.removeItem("user_data");
        next("admin/login");
    }
};
