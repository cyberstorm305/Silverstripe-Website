<?php
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;

class Product extends DataObject
{
    private static $field_labels = [
        'Price' => 'Cost' // renames the column to "Cost"
    ];

    private static $summary_fields = [
        'Name',
        'Price'
    ];

    private static $db = [
        'Name' => 'Varchar',
        'ProductCode' => 'Varchar',
        'Price' => 'Currency'
    ];

    private static $has_one = [
        'Category' => 'Category'
    ];

    private static $searchable_fields = [
        'Name',
        'ProductCode'
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