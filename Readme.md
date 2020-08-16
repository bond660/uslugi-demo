# uslugi-demo

Состав приложения:
  - mailhog
  - nginx
  - php (7.1)
  - laravel
  - react.js

### Запуск

Для запуска приложения необходим Docker и docker-compose.

    $ cd uslugi-demo
    $ (cd uslugi-svr && cp .env.example .env)
    $ docker-compose up -d

Время сборки: 5-7 минут

Приложение отвечает на порту **3000** (front),
API (Laravel) на порту **8080** (здесь нет страниц, только REST APIs)

### Использование

**http://localhost:3000/**
