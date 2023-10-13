

## Установка

Для начала, убедитесь, что у вас уже установлен Docker и Docker Compose.

### Запуск проекта

1. Склонируйте репозиторий проекта:
   ```
   git clone https://github.com/daz9e/CarLoans.git
   cd CarLoans
   ```

2. Создайте `.env`:
    ```
   cp .env.example .env
   ```

3. Запустите проект с помощью Docker Compose:
   ```
   docker-compose up -d
   ```
   
4. Установите зависимости Composer:
   ```
   docker exec -it carloans-php-fpm-1 composer install
   ```
   
5. Примените миграции и заполните базу данных сидерами:
   ```
   docker exec -it carloans-php-fpm-1 php artisan migrate --seed
   ```

6. Сгенерируйте ключ приложения:
   ```
    docker exec -it carloans-php-fpm-1 php artisan key:generate
   ```

7. Настройте L5 Swagger:
   ```
   docker exec -it carloans-php-fpm-1 php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
   ```
8. Сгенерируйте конфиг для Swagger:
   ```
    php artisan l5-swagger:generate
   ```
9. Запустите проект:
   ```
   docker exec -it carloans-php-fpm-1 php artisan serve
   ```

10. Теперь вы можете открыть ваш проект по адресу [http://localhost:8080](http://localhost:8080). Документация Swagger доступна по адресу [http://localhost:8080/api/documentation](http://localhost:8080/api/documentation).

## Остановка проекта

Для остановки проекта выполните следующую команду:

```
docker-compose down
```

