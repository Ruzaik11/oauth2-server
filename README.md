
# OAuth2 Authentication Module

 **Task**
Create a REST API in Laravel which has the OAuth2 authentication module which includes CRUD operations with the respective HTTP verbs.

**Tech Stack Used**

Laravel, PHP

**Setup guide for back end***

- 01: firstly we have to create a mysql database and the name of the database should be added to .env file

- 02: ```composer install```

- 03: ``` npm install && npm run dev ```

- 04: ``` php artisan migrate ```

- 05: ``` php artisan db:seed ```

- 06: ``` php artisan passport:client ```


The number 06 command will prompt few questions and the answers should be given like below given

- Which user ID should the client be assigned to? 1
- What should we name the client? exetel-app-user
- Where should we redirect the request after authorization? http://localhost:8080/callback

The newly generated  Client ID and Client secret are required for the front end client setup

- 07: finally ``` php artisan serve ``` to run the project server 

That's it we are now ready to start using the OAuth2 backend ⭐
