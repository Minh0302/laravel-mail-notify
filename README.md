php artisan make:notification NewUserRegisterNotification
php artisan make:controller Homecontroller
php artisan make:notification MailNotification
php artisan migrate:fresh --seed
php artisan queue:table
php artisan migrate
 php artisan queue:listen


https://mailtrap.io/inboxes/1774232/messages/2820401724