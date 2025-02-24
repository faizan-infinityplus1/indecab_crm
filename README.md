## Prerequisite
- PHP: "8.2 or higher"
- Composer: 2.2 or higher

### Please follow to start the project

- Create a copy of .env.example to .env
- Update your env variables
- run `composer install` to install the dependencies
- run migration command `php artisan migrate`
- clear your cache: `php artisan optimize:clear`
- link your storage: `php artisan storage:link`
- create app key: `php artisan key:generate`
- create an admin account: `php artisan db:seed`
- run the server: `php aritsan serve`
- 


### Default admin username and password
- username: admin@gmail.com, password: 123456789
