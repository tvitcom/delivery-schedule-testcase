# way-dispatcher
This is test case "Way-Dispathcher" application for some Company.

## Setup:
1. In terminal go to webroot directory and execute:

```
curl -sS https://getcomposer.org/installer | php
php composer.phar update
```

   After will downloads nessosary components and framework Yii in vendor folder.
2. Create new database and database user with same name "way". Set settings 
     protected/config/database.php for our db "way".
3. Import actual demo dump file from the folder: protected/data/way_yyyymmddhhmm.sql 
     (part name as format yyyy-mm-dd hh:mm)
     
## Using account:

- Administrator (as login/password): admin/pass_as_admin
- Dispatcher  (as login/password): dispatcher/dispatcher

