<?php

class shopHidsetPlugin extends shopPlugin
{

    public $hsets = array(
        'products_per_page' => array(
            'type' => 'int',
            'desc' => 'Количество товаров на одной странице/за одну загрузку lazyloading в бэкенде'
        ),
        'reviews_per_page_total' => array(
            'type' => 'int',
            'desc' => 'Количество отзывов '
        ),
        'reviews_per_page_product' => array(
            'type' => 'int',
            'desc' => ''
        ),
        'review_highlight_time' => array(
            'type' => 'int',
            'desc' => ''
        ),
        'products_default_view' => array(
            'type' => 'select',
            'desc' => '',
            'value' => array(
                'thumb',
                'table',
                'skus'
            )
        ),
        'product_orders_per_page' => array(
            'type' => 'int',
            'desc' => ''
        ),
        'types_per_page' => array(
            'type' => 'int',
            'desc' => ''
        ),
        'features_per_page' => array(
            'type' => 'int',
            'desc' => ''
        ),
        'statrows_per_page' => array(
            'type' => 'int',
            'desc' => ''
        ),
        'orders_update_list' => array(
            'type' => 'int',
            'desc' => ''
        ),
        'stocks_log_items_per_page' => array(
            'type' => 'int',
            'desc' => ''
        ),
        'marketing_expenses_per_page' => array(
            'type' => 'int',
            'desc' => ''
        ),
        'customers_per_page' => array(
            'type' => 'int',
            'desc' => 'Количество отображаемых покупателей на одной странице/за одну загрузку lazyloading в бэкенде'
        ),
        'can_use_smarty' => array(
            'type' => 'select',
            'desc' => 'Возможность использовать Smarty в описаниях товаров и на информационных страницах. TRUE - включено. FALSE - выключено',
            'value' => array(
                'true',
                'false'
            )
        )
    );
}
