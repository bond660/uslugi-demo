# uslugi-demo

Состав приложения:
  - mailhog
  - nginx
  - php7.1
  - laravel
  - react.js

Для запуска приложения необходим Docker и docker-compose.

```
cd uslugi-demo
docker-compose up -d
```

Время сборки: 5-7 минут

Приложение запустится на порту **3000** (front),
API (Laravel) работает на порту **8080** (здесь нет страниц, только REST APIs)

### Использование

**http://localhost:3000/**
