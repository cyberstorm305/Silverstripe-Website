<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;

class Category extends DataObject
{

    private static $db = [
        'Title' => 'Text'
    ];

    private static $has_many = [
        'Products' => 'Product'
    ];

    public function canView($member = null, $context = [])
    {
        return Permission::check('CMS_ACCESS_ShopAdmin', 'any', $member);
    }

    public function canEdit($member = null, $context = [])
    {
        return Permission::check('CMS_ACCESS_ShopAdmin', 'any', $member);
    }

    public function canDelete($member = null, $context = [])
    {
        return Permission::check('CMS_ACCESS_ShopAdmin', 'any', $member);
    }

    public function canCreate($member = null, $context = [])
    {
        return Permission::check('CMS_ACCESS_ShopAdmin', 'any', $member);
    }
}

