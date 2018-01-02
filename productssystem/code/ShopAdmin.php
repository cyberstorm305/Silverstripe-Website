<?php

use SilverStripe\Admin\ModelAdmin;
use SilverStripe\Forms\CheckboxField;

class ShopAdmin extends ModelAdmin
{
    private static $managed_models = [
        'Product',
        'Category'
    ];

    public $showImportForm = false;

    private static $url_segment = 'shop';

    private static $menu_title = 'Shop Admin';

}