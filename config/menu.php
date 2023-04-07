<?php
    return[
        [
            'label' => 'Trang chủ',
            'route' => 'admin.dashboard',
            'icon' => 'fa-home'
        ],
        /*  Category  */
        [  
            'label' => 'Quản lý danh mục',
            'route' => 'category.index',
            'icon' => 'fa-list-alt',
            'items' => [
                [
                    'label' => 'Danh sách danh mục',
                    'route' => 'category.index', 
                ],
                [
                    'label' => 'Thêm danh mục',
                    'route' => 'category.create', 
                ]
            ]
        ],
        /*   Product  */
        [  
            'label' => 'Quản lý sản phẩm',
            'route' => 'product.index',
            'icon' => 'fa-industry',
            'items' => [
                [
                    'label' => 'Danh sách sản phẩm',
                    'route' => 'product.index', 
                ],
                [
                    'label' => 'Thêm sản phẩm',
                    'route' => 'product.create', 
                ]
            ]
        ],
        /*   Banner  
        [  
            'label' => 'Banner Manager',
            'route' => 'banner.index',
            'icon' => 'fa-image',
            'items' => [
                [
                    'label' => 'All Banner',
                    'route' => 'banner.index', 
                ],
                [
                    'label' => 'Add Banner',
                    'route' => 'banner.create', 
                ]
            ]
        ],*/
        /*   Order  */
        // [  
        //     'label' => 'Order Manager',
        //     'route' => 'order.index',
        //     'icon' => 'fa-shopping-cart',
        //     'items' => [
        //         [
        //             'label' => 'All Order',
        //             'route' => 'banner.index', 
        //         ],
        //         [
        //             'label' => 'Statistic',
        //             'route' => 'banner.index', 
        //         ]
        //     ]
        // ],
        /*   Account  */
        [  
            'label' => 'Account Manager',
            'route' => 'account.index',
            'icon' => 'fa-user',
            'items' => [
                [
                    'label' => 'All Account',
                    'route' => 'account.index', 
                ]
            ]
        ]


    ]
?>