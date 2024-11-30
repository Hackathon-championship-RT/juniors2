# Это локальная версия сайта
Необходимые утилиты: <a href="https://www.php.net/downloads.php">PHP>=8.0</a>, <a href="https://getcomposer.org/download/">Composer</a>, <a href="https://nodejs.org/en">Node.js</a>, <a href="https://www.apachefriends.org">XAMPP</a>, Python
### Инструкция по установке:
Копирование проекта из GitHub`а:
```
git init
git remote add origin https://github.com/Hackathon-championship-RT/juniors2
git pull origin main
cd laravel
```
### Установка плагинов для Laravel:
```
composer install
npm install
copy .env.example .env
```
### Установка плагинов для React и запуск его:
(новый терминал)
```
cd react
npm install
npm run build
```
#### Запускаем XAMPP, а именно Apache, MySQL
### Создание базы данных, генерация ключа:
(новый терминал)
```
cd laravel
php artisan key:generate
php artisan storage:link
```
### Запуск сервера:
```
php artisan serve
```
в базу данных экспортируйт файл *.sql, предложенный в main ветке
## На локальном сервере вход через Telegram не работает, потому что для этого требуется настройка виртуальных хостов в Windows.
