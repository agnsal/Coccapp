# Coccapp
Laravel + Vue.js + Vuex app.

## Behind the scenes
### Laravel + Vue.js + Vuex app creation
1. Create project folder: ```composer create-project laravel/laravel Coccapp```
or: ```composer global require laravel/installer && laravel new Coccapp```
2. ```cd Coccapp```
3. To run the server: ```php artisan serve```
4. To install eventual php dependencies: php ```composer update && composer install```
5. To create Models: ```php artisan make-model <modelName> -a```
6. To have the proper DB structure: fill models migrations and migrate ```php artisan migrate```
7. To rebuild the entire DB structure: ```php artisan migrate:fresh```
8. To populate the DB via Seeders: ```php artisan db:seed --class=<seederName>```
9. Run the server: ```php artisan serve```
10. Install Vue and Vuex:
     - ```composer require laravel/ui```
     - ```php artisan ui vue```
     - ```php artisan ui vue --auth```
     - ```npm install```
     - ```npm update vue-loader```
     - ```npm install vuex --save```
     - ```npm run dev```
     - ```npm run watch```
    
    Or:
     - ```npm install```
     - ```npm install -g npm-install-peers```
     - ```npm install vue```
     - ```npm install vuex --save```
