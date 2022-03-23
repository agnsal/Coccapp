# Coccapp
Laravel + Vue.js + Vuex app.

## Behind the scenes
### Laravel + Vue.js + Vuex app creation
1. Create project folder: ```composer create-project laravel/laravel Coccapp```
or: ```composer global require laravel/installer && laravel new Coccapp```
2. ```cd Coccapp```
3. To run the server: ```php artisan serve```
4. To install eventual php dependencies: php ```composer update && composer install```
5. To create Models: ```php artisan make:model <modelName> -a```
5. To create Casts: ```php artisan make:cast <cast --class=BreedName>```
6. To have the proper DB structure: fill models migrations and migrate ```php artisan migrate```
7. To rebuild the entire DB structure: ```php artisan migrate:fresh```
8. To populate the DB via Seeders: ```php artisan db:seed --class=<seederName>```
9. Run the server: ```php artisan serve```
10. Install Vuex:
     - ```npm install```
     - ```npm install vuex```
     - ```npm run dev``` or ```npm run watch```
     
