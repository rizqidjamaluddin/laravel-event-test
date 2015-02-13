To test the event handling:

```
git clone https://github.com/rizqidjamaluddin/laravel-event-test.git
composer install
php artisan tinker

# when the tinker shell comes up:
>>> event(new App\Events\TestEvent);
```

Tinker should quit and say `"foo!"`.
