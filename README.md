# Coccapp
Laravel + Vue.js + Vuex + Vuetify SPA app.

Work in progress...

## Behind the scenes
### Laravel
- To create the project: ```composer create-project laravel/laravel <ProjectName>```
- ```cd <ProjectName>```
- To run the server: ```php artisan serve```
- To install Laravel Backup (https://spatie.be/docs/laravel-backup/v8/taking-backups/overview#breadcrumb):
    - ```composer require spatie/laravel-backup```
    - ```php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"```
- To run Laravel Backup on DB: ```php artisan backup:run --only-db```
- To use Laravel Telescope:
    - To install Laravel Telescope:
        - ```composer require laravel/telescope```
        - ```php artisan telescope:install```
        - ```php artisan migrate```
        - Follow the steps defined in https://laravel.com/docs/9.x/telescope
    - To access Laravel Telescope Dashboard, go to http://127.0.0.1:8000/telescope
- To install Laravel DB Dumper (https://github.com/spatie/db-dumper): ```composer require spatie/db-dumper```
- To install Laravel ActivityLog (https://spatie.be/docs/laravel-activitylog/v4/introduction):
    - ```composer require spatie/laravel-activitylog```
    - Define "ACTIVITY_LOGGER_DB_CONNECTION" in .env
    - ```php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="activitylog-migrations"```
    - See https://spatie.be/docs/laravel-activitylog/v4/installation-and-setup for more info
- To create a model: ```php artisan make:model <ModelName>``` use -m flag for Migration too or use -a flag for Migration and Controller too
- To create Model Resources: ```php artisan make:resource <ResourceName>Resource```
- To create a Cast: ```php artisan make:cast <CastName>```
- To create a Migration: ```php artisan make:migration <create_some_table>```
- To create a Seeder: ```php artisan make:seeder <SeederName>```
- To run a Seeder: ```php artisan db:seed --class=<SeederName>```
- To enable Service creation with artisan: ```composer require timwassenburg/laravel-service-generator```
- To create a Service: ```php artisan make:service <serviceName>```
- To create an Observer and make it active:
    - ```php artisan make:observer <ObserevrName> --model=<ObservedModelName>```
    - Add it into boot() of app/Providers/AppServiceProvider.php (<ModelName>::observe(<ObserverName>::class);)
    - Regenerate Laravel Bootstrap cache: ```composer dump-autoload```
- To create a Job: ```php artisan make:job <JobName>```
- To create a custom Validator: ```php artisan make:rule <RuleName>```
- To rebuild the DB: ```php artisan migrate```
- To rebuild the entire DB structure: ```php artisan migrate:fresh```
- To create a Command: ```php artisan make:command <CommandName>```
- To create an Email: ```php artisan make:mail <MailName>```
- To enable DB Job queue:
    - ```php artisan queue:table```
    - ```php artisan migrate```
- To clear the cache: ```php artisan cache:clear```
- To run dispatched Jobs without Supervisor: ```php artisan queue:work```
- To update Laravel version: ```composer update```
- To clean Laravel cache: ```php artisan cache:clear``` 
- To clean Laravel configuration cache: ```php artisan config:clear```
- To clean Laravel compiled views: ```php artisan view:clear```
- To regenerate the list of all the classes to be included: ```composer dump-autoload```
- To get all the available routes: ```php artisan route:list```


### Laravel + Vue.js + Vuex app creation
1. Create project folder: ```composer create-project laravel/laravel Coccapp```
or: ```composer global require laravel/installer && laravel new Coccapp```
2. ```cd Coccapp```
3. To run the server: ```php artisan serve```
4. To install eventual php dependencies: php ```composer update && composer install```
5. Run the server: ```php artisan serve```
6. Install Vuex:
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
7. After changing Kernel file: ```composer dump-autoload```


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
