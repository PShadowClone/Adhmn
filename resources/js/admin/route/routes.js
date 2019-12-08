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

                default: true,

                children: [
                    {
                        path: 'landing/',
                        component: () => import('@/views/settings/landing'),
                        children: [
                            {
                                path: 'create',
                                component: () => import('@/views/settings/landing/create'),
                                name: 'landing.index',
                            }
                        ]
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
