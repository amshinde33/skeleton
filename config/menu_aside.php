<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/home',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'USER',
        ],
        [
            'title' => 'User Information',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'User Profile',
                    'page' => 'profile'
                ],

                [
                    'title' => 'User List',
                    'page' => 'userlist'
                ],
                [
                    'title' => 'Change Password',
                    'page' => 'passwordPage'
                ],
                [
                    'title' => 'User Role',
                    'page' => 'userRolesList'
                ]
            ],

        ], 
          // Custom
        [
            'title' => 'Customer Information ',
            'icon' => 'media/svg/icons/Design/Bucket.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' =>
            [
                [
                    'title' => 'Customer List',
                    'page' => 'customerList'
                ],
                
            ],
        ],
        [
            'title' => 'Application',
            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' =>
            [
                [
                    'title' => ' Application List',
                    'page' => 'appList'
                ],
            ],
        ]

        ],
    'Admin'=> [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/home',
            'new-tab' => false,
        ],
       // User
            [
                'section' => 'USER',
            ],
        [
            'title' => 'User Information',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'User Profile',
                    'page' => 'profile'
                ],

                [
                    'title' => 'User List',
                    'page' => 'userlist'
                ],
                [
                    'title' => 'Change Password',
                    'page' => 'passwordPage'
                ],
                [
                    'title' => 'User Role',
                    'page' => 'userRolesList'
                ]
            ],

        ],
        [
            'title' => 'Customer Information ',
            'icon' => 'media/svg/icons/Design/Bucket.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' =>
            [
                [
                    'title' => 'Customer List',
                    'page' => 'customerList'
                ],
            ],
        ],
        [
            'title' => 'Application',
            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' =>
            [

                [
                    'title' => ' Application List',
                    'page' => 'appList'
                ],
            ],
        ]

        ],

    
        'Customer'=> [
            // Dashboard
            [
                'title' => 'Dashboard',
                'root' => true,
                'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
                'page' => '/home',
                'new-tab' => false,
            ],
    
            // User
            [
                'section' => 'USER',
            ],
            [
                'title' => 'User Information',
                'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
                'bullet' => 'dot',
                'root' => true,
                'submenu' => [
                    [
                        'title' => 'User Profile',
                        'page' => 'profile'
                    ],
                    [
                        'title' => 'Change Password',
                        'page' => 'passwordPage'
                    ]
                ],
    
            ],
            [
                'title' => 'Application',
                'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
                'bullet' => 'dot',
                'root' => true,
                'submenu' =>
                [
                    [
                        'title' => ' Application List',
                        'page' => 'appList'
                    ],
                ],
            ]
            ]
];
