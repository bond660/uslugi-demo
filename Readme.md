# uslugi-demo

Состав приложения:
  - mailhog
  - nginx
  - php (7.1)
  - laravel
  - react.js
  - postgresql

### Запуск

Для запуска приложения необходим Docker и docker-compose.

    $ cd uslugi-demo
    $ docker-compose up -d

Время сборки: 5-7 минут

Приложение отвечает на порту **3000** (front),
API (Laravel) на порту **8080** (здесь нет страниц, только REST APIs)

### Использование

Фронт по адресу **[http://localhost:3000/](http://localhost:3000/)**

Вызов artisan:

    $ docker-compose run artisan help

Получение email (mailhog): веб-интерфейс по адресу [http://localhost:8025/](http://localhost:8025/)

NOTE: При перезапуске compose данные стираются (migrate:fresh)

Доступ к pgadmin: [http://localhost:5050](http://localhost:5050)

- pg@admin.org:admin
