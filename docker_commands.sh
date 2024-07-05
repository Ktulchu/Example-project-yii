#!/bin/bash

#fix ошибки Psgrage
rm -rf ./docker/data/*

# Запускаем PHP и устанавливаем Yii2
docker compose run --rm php composer cr

# Проверка успешного завершения установки Yii2
if [ $? -eq 0 ]; then
    # Если успешно, поднимаем все остальные контейнеры
    docker compose up -d

    # проверяем запуск контейнеров
    if [ $? -eq 0 ]; then
        # По завершению запускаем миграции
        docker compose run --rm php php yii migrate
    else
        echo "Ошибка запусков контрейнеров"
    fi
else
    echo "Ошибка установки Yii2 framework"
fi
