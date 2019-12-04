export const routes = [
    {
        path: '/admin',
        component: () => import('@/views/settings/index'),
        children: [
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
                ]
            }
        ]
    },

]
