# Coccapp
Laravel + Vue.js + Vuex app.

## Behind the scenes
### Laravel + Vue.js + Vuex app creation
1. Create project folder: ```composer create-project laravel/laravel Coccapp```
or: ```composer global require laravel/installer && laravel new Coccapp```
2. ```cd Coccapp```
3. To run the server: ```php artisan serve```
4. To create Models: ```php artisan make-model <modelName> -a```
5. To have the proper DB structure: fill models migrations and migrate ```php artisan migrate```
6. To rebuild the entire DB structure: ```php artisan migrate:fresh```
7. ```npm install vuex --save```
