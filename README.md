# Это локальная версия сайта <a href="https://pod.tatar">pod.tatar</a>
Необходимые утилиты: <a href="https://www.php.net/downloads.php">PHP>=8.0</a>, <a href="https://getcomposer.org/download/">Composer</a>, <a href="https://nodejs.org/en">Node.js</a>, <a href="https://www.apachefriends.org">XAMPP</a> 
#### Инструкция по установке:
Копирование проекта из GitHub`а:
```
git init
git clone https://github.com/hackathonsrus/pp_20041_pfo_ta_net_amerikanskih_burgerov_3_81
cd pp_20041_pfo_ta_net_amerikanskih_burgerov_3_81
cd laravel
```
### Установка плагинов:
```
composer install
npm install
```
### Создание базы данных, генерация ключа:
```
php artisan migrate
php artisan key:generate
```

