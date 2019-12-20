export default {
    namespaced: true,
    state: {
        loaderDisable: false
    },
    mutations: {
        changeLoaderState(state, loaderStatus) {
            state.loaderDisable = loaderStatus;
        }
    },
    actions: {
        showLoader({commit}) {
            return commit("changeLoaderState", true);
        },
        hideLoader({commit}) {
            console.log('heres')
            return commit("changeLoaderState", false);
        }
    }
}