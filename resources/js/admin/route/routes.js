import authenticate from '../operations/authenticate'

export const routes = [
    {
        path: '/admin',
        component: () => import('@/views/index'),
        children: [
            {
                path: '/',
                component: () => import('@/views/settings/index'),
                meta: {layout: 'dashboard'},
                name: 'home',
                beforeEnter: authenticate,
            },
            {
                path: 'settings/',
                component: () => import('@/views/settings/index'),
                name: 'settings.index',
                children: [
                    {
                        path: 'landing',
                        component: () => import('@/views/settings/landing'),
                        children: [
                            {
                                path: '/',
                                meta: {layout: 'dashboard'},
                                component: () => import('@/views/settings/landing/control'),
                                name: 'landing.control',
                            },
                            {
                                path: 'create',
                                component: () => import('@/views/settings/landing/create'),
                                name: 'landing.create',
                            }
                        ]
                    }
                ],
            },
            {
                path: 'country/',
                component: () => import('@/views/country/index'),
                name: 'country.index',
                meta: {layout: 'dashboard'},
                beforeEnter: authenticate,
                children: [
                    {
                        path: '/',
                        meta: {layout: 'dashboard'},
                        name: 'country.list',
                        component: () => import('@/views/country/list.vue'),
                    }
                ],
            },
            {
                path: 'login',
                name: 'login',
                component: () => import('@/views/auth/signin'),
                meta: {layout: 'auth'}
            }
        ]
    },

]
