# Coccapp
Laravel + Vue.js + Vuex + Vuetify SPA app.

## Behind the scenes
### Laravel + Vue.js + Vuex app creation
1. Create project folder: ```composer create-project laravel/laravel Coccapp```
or: ```composer global require laravel/installer && laravel new Coccapp```
2. ```cd Coccapp```
3. To run the server: ```php artisan serve```
4. To install eventual php dependencies: php ```composer update && composer install```
5. To create Models: ```php artisan make:model <modelName> -a```
6. To create Model Resources: ```php artisan make:resource <resourceName>Resource```
7. To create Casts: ```php artisan make:cast <cast --class=BreedName>```
8. To have the proper DB structure: fill models migrations and migrate ```php artisan migrate```
9. To rebuild the entire DB structure: ```php artisan migrate:fresh```
10. To populate the DB via Seeders: ```php artisan db:seed --class=<seederName>```
11. To enable Service creation with artisan: ```composer require timwassenburg/laravel-service-generator```
12. To create a Service: ```php artisan make:service <serviceName>```
13. To create a Command: ```php artisan make:command <commandName>```
14. Run the server: ```php artisan serve```
15. To clean Laravel cache: ```php artisan cache:clear```
15. To clean Laravel configuration cache: ```php artisan config:clear```
15. To clean Laravel compiled views: ```php artisan view:clear```
15. To regenerate the list of all the classes to be included: ```composer dump-autoload```
16. Install Vuex:
     - To download Vue in Laravel: ```composer require laravel/ui```
     - To install Vue and all needed dependencies in Laravel: ```php artisan ui vue --auth``` auth flag is needed for authentication only
     - ```npm install```
     - ```npm install sass-loader```
     - ```npm install vuex```
     - ```npm install vuetify```
     - ```npm install @mdi/font -D```
     - ```npm install axios```
     - ```npm run dev``` or ```npm run watch```
     - ```npm run start``` or ```npm run serve```
     - If you have any issue, try: ```npm clean-install```; ```npm i vue-loader```; [```npm install --global webpack```]; [npm install vue-template-compiler vue-loader@^15.9.7 --save-dev --legacy-peer-deps]
17. After changing Kernel file: ```composer dump-autoload```
18. To get all the available routes: ```php artisan route:list```


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
