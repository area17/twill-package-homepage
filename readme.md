# Twill homepage

NOTE: This will only work as of twill version 2.7 (unreleased atm)

This package will provide a singleton homepage capsule.

You can install it using the command below:

```
composer require area17/twill-package-homepage
```

Once installed make sure you run migrations, then seed using:

```
php artisan db:seed TwillHomepage\\Twill\\Capsules\\Homepages\\Database\\Seeds\\HomepageSeeder
```
