# Sending Email using job and queue

This is a simple project which sends email to all the admins whenever a new user is registered into the system. Emails are sent using Job and Queue.

## Initial Setup

Follow these steps:

1. `composer install`
2. `cp .env.example .env`
3. `npm install`
4. `npm run dev`
5. create a database: **_emailjob_**
6. `php artisan migrate:fresh --seed`
7. `php artisan serve`
8. `php artisan queue:work`
9. open mailtrap in a tab
10. now goto register page and register a user
11. You can see email being sent to all the admins in mailtrap


### Steps to test DB transaction:

1. Go to the `/customers/create` route and fill out the form to add customers.
2. First of all user will be created then the customer is created with the same user id which can be viewed in the store method.
3. After successfully created it will redirect to `/customers` with a success message.
4.  If we change the code inside the DB transaction in the customer creation part to the wrong code intentionally then when we submit, the User creation will be rollbacked and the site will redirect to `/customers`  with a error message.
