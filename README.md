# Это локальная версия сайта
Необходимые утилиты: <a href="https://www.php.net/downloads.php">PHP>=8.0</a>, <a href="https://getcomposer.org/download/">Composer</a>, <a href="https://nodejs.org/en">Node.js</a>, <a href="https://www.apachefriends.org">XAMPP</a> 
### Инструкция по установке:
Копирование проекта из GitHub`а:
```
git init
git remote add origin [https://github.com/hackathonsrus/pp_20041_pfo_ta_net_amerikanskih_burgerov_3_81](https://github.com/Hackathon-championship-RT/juniors2)
git pull origin laravel
cd laravel
```
### Установка плагинов:
```
composer install
npm install
copy .env.example .env
```
#### Запускаем XAMPP, а именно Apache, MySQL
### Создание базы данных, генерация ключа:
```
php artisan key:generate
php artisan migrate
(если необходимо создать базу данных)
yes
php artisan storage:link
```
### Запуск сервера:
```
php artisan serve
```
## На локальном сервере вход через Telegram не работает, потому что для этого требуется настройка виртуальных хостов в Windows. Работа с Telegram`ом настроена на сайте. База данных в этом случае локальная, поэтому с ней не может связаться Telegram бот и Parser.
