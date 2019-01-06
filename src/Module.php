<?php

namespace devortix\admin;

use yii;

class Module extends \yii\base\Module
{

    public $navItems = [

    ];

    public $layout = 'main.php';

    public function init()
    {
        parent::init();
        if (!$this->navItems) {
            $this->navItems = $this->defaultItems;
        }
    }

    public static function getDefaultItems()
    {
        return [
            ["label" => Yii::t('admin-panel', 'Main'), "url" => "/admin", "icon" => "home"],
            ["label" => Yii::t('admin-panel', 'Feedback'), "url" => ["/feedback/admin"], "icon" => "envelope"],
            ["label" => Yii::t('admin-panel', 'Users'), "url" => ["/user/admin"], "icon" => "users"],
            [
                "label" => \Yii::t('admin-panel', 'Settings'),
                "url" => "#",
                "icon" => "cogs",
                "items" => [
                    ['label' => Yii::t('admin-panel', 'Clear cache'), 'url' => ['/admin/default/flush-cache']],

                ],
            ],
            [
                "label" => \Yii::t('admin-panel', 'Translate manager'),
                "url" => "#",
                "icon" => "globe",
                "items" => [
                    ['label' => Yii::t('language', 'List of languages'), 'url' => ['/translatemanager/language/list']],

                    ['label' => Yii::t('language', 'Scan'), 'url' => ['/translatemanager/language/scan']],
                    ['label' => Yii::t('language', 'Optimize'), 'url' => ['/translatemanager/language/optimizer']],
                    ['label' => Yii::t('language', 'Im-/Export'), "url" => "#", 'items' => [
                        ['label' => Yii::t('language', 'Import'), 'url' => ['/translatemanager/language/import']],
                        ['label' => Yii::t('language', 'Export'), 'url' => ['/translatemanager/language/export']],
                    ],
                    ],
                ],
            ],
        ];
    }
}