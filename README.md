Hello! 

This is backend part of the assesment you sent me :). 
It is based on Symfony 6 + Doctrine ORM + PostgreSQL db.

To set up the app:

1) make sure your computer has postgresql + its driver installed
and have PHP version 8. You should also have Composer (in short, follow standard Symfony 6 system requirements).


2) run:
> composer install

3) create a DB user and give it privileges to create databases. Login and password are:

> lsi_db_user / lsi_passw0rd

of course, you can use any other user you want, just don't forget to change the .env file accordingly.

4) to create a table for Export entity run:

> php bin/console make:migration


5) I really like the idea of Laravel seeders, and always strive
to save mandatory/test data for DB in a seeder. So I added an "orm-fixtures" package that play the same role as Laravel seeder and created a fixture that generates 5 test exports.
To run it execute:

> php bin/console doctrine:fixtures:load


6) configure a virtual host for this app or use:

> symfony server:start

7) That's it, your backend should be up and running :).