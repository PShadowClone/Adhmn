const AUTH = 'super'
export default {
    auth: {
        base: 'super',
        login: AUTH + '/login',
    },
    country: {
        all: 'countries'
    },
    sliders: {
        all: 'sliders',
        delete: id => 'sliders/' + id
    },
    landing: {
        base: 'landing',
        parents: 'landing/parents',
        delete: id => 'landing/' + id,
        show: id => 'landing/' + id,
        update: id => 'landing/' + id,
    }
}