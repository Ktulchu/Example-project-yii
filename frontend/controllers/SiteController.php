<?php

namespace frontend\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actions(): array
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    public function actionIndex(): string
    {
        return 'This is SiteController';
    }
}