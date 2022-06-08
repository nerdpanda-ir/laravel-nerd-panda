# about

this package made for learning laravel package development !!!

in other words this package is practice , and this package no provide nothing feature for your laravel application !!!

# installation
if you need to read my codes and see my code functionalities you can use below command for install this package
```bash
    composer require nerdpanda/nerd-panda
```
# after installation
if you go to
```http
  GET domain.local/nerd-panda
```
route you see ugly page !!! if you want to see beautiful page you should use below command for publish package assets to public directory of your laravel application !!!
```bash
php artisan vendor:publish --tag=nerdPanda.assets
```