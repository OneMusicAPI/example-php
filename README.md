# example-php

This is an example of using the PHP client SDK to make queries to OneMusicAPI.

## Requirements

PHP 5.5 and later

## How it was built
In short, follow the instructions at https://packagist.org/.

When `composer` is run, the dependencies are downloaded. These include the `client-php` package itself, and downstream dependencies like a HTTP client.

## How to run
1. [Download `composer.phar`](https://getcomposer.org/composer.phar) into the root folder of the project.
1. Run composer to download the dependencies:
```php
php composer.phar install
```
1. Replace the `$user_key` variable, inputting your user key sent to you when you [signed up](http://www.onemusicapi.com/).
1. Test the page!

## Points of interest
Currently we only have one example, which queries OneMusicAPI for information about a release given its title and artist.