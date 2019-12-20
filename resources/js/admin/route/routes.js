import authenticate from '../operations/authenticate'

export const routes = [
    {
        path: '/admin',
        component: () => import('@/views/index'),
        children: [
            {
                path: '/',
                component: () => import('@/views/settings/index'),
                name: 'homes',
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
                                component: () => import('@/views/settings/landing/control'),
                                name: 'landing.control',
                            },
                            {
                                path: 'list',
                                component: () => import('@/views/settings/landing/list'),
                                name: 'landing.list',
                            },
                            {
                                path: 'update/:id',
                                component: () => import('@/views/settings/landing/update'),
                                name: 'landing.update',
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
                meta: {layout: 'dashboard'},
                beforeEnter: authenticate,
                children: [
                    {
                        path: '/',
                        name: 'country.list',
                        component: () => import('@/views/country/list.vue'),
                    }
                ],
            },
            {
                path: 'login',
                name: 'login',
                meta: {layout: 'auth'},
                component: () => import('@/views/auth/signin'),

            }
        ]
    },

]
