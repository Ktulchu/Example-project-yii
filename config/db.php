<?php

return [
    'class' => \yii\db\Connection::class,
    'dsn' => "pgsql:host={$_ENV['POSTGRES_HOST']};port=5432;dbname={$_ENV['POSTGRES_DB']}",
    'username' => $_ENV['POSTGRES_USER'],
    'password' => $_ENV['POSTGRES_PASSWORD'],
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'columnSchemaClass' => [
                'class' => \yii\db\pgsql\ColumnSchema::class,
                'deserializeArrayColumnToArrayExpression' => false,
            ],
            'defaultSchema' => 'public',
        ],
    ],
    'on afterOpen' => function ($event) {
        $event->sender->createCommand("SET search_path TO public;")->execute();
    },
];
