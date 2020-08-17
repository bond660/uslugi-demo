# uslugi-demo

Состав приложения:
  - mailhog
  - nginx
  - php (7.1)
  - laravel
  - react.js
  - postgresql

### Запуск

Для запуска приложения необходим Docker и docker-compose. Скрипт запуска:

    $ cd uslugi-demo
    $ docker-compose up init
    $ docker-compose up

Время сборки: 5-7 минут

Приложение отвечает

- Front на порту **3000** (react),
- Rest APIs на порту **8080** (laravel)

### Использование

Фронт по адресу **[http://localhost:3000/](http://localhost:3000/)**

Вызов artisan:

    $ docker-compose run artisan help

Получение email (mailhog): веб-интерфейс по адресу [http://localhost:8025/](http://localhost:8025/)

Доступ к pgadmin: [http://localhost:5050](http://localhost:5050)

        pg@admin.org:admin
