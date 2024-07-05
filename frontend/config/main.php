<?php

use yii\helpers\ArrayHelper;

$mainConfig = require dirname(__DIR__) . '/../config/web.php';

$config = [
    'id' => 'crm',
    'name' => 'АН АРБАТ',
    'basePath' => dirname(__DIR__),
   // 'container' => require __DIR__ . '/container.php',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'assetManager' => [
            'basePath' => dirname(__DIR__) . '/web/assets',
            'appendTimestamp' => true,
            'bundles' => [
                'yii2mod\slider\IonSliderAsset' => [
                    'css' => [
                        'css/ion.rangeSlider.css'
                    ]
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'dateFormat' => 'php:d.m.Y',
            'timeFormat' => 'php:H:i:s',
            'datetimeFormat' => 'php:d.m.Y H:i:s',
            'nullDisplay' => '',
        ],
    ],
];

return ArrayHelper::merge($mainConfig, $config);