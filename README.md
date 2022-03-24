# Coccapp
Laravel + Vue.js + Vuex SPA app.

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
     - To download Vue in Laravel: ```composer require laravel/ui```
     - To install Vue in Laravel: ```php artisan ui vue --auth``` auth flag is needed for authentication only
     - ```npm install```
     - ```npm install vuex```
     - ```npm run dev``` or ```npm run watch```
     - ```npm run start``` or ```npm run serve```


## Contacts
Agnese Salutari – agneses92@hotmail.it

Distributed under the Apache License 2.0. See ``LICENSE`` for more information.

[https://github.com/agnsal](https://github.com/agnsal)


## Contributing
1. Fork it (<https://github.com/yourname/yourproject/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request
