<?php

namespace frontend\controllers;

use Yii;
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

    public function actionIndex()
    {
        //return 'This is SiteController';
        $tables = Yii::$app->db->schema->getTableNames();
        foreach ($tables as $table) {
            echo $table . "<br>";
        }
    }
}