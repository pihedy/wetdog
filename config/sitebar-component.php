<?php declare(strict_types=1);

return [
    'navigations' => [
        'main' => [
            [
                'label' => 'Dashboard',
                'icon'  => 'fa-tachometer-alt',
                'route' => 'web.dashboard.index',
                'type'  => 'item',
            ],
            [
                'label' => 'Features',
                'icon'  => 'fa-cogs',
                'type'  => 'title',
            ],
            [
                'label' => 'JukeBox',
                'icon'  => 'fa-tachometer-alt',
                'route' => 'web.jukebox.index',
                'type'  => 'item',
            ],
        ],
        'options' => [
            [
                'label' => 'Profile',
                'icon'  => 'fa-user',
                'route' => 'web.profile.index',
            ]
        ]
    ]
];
