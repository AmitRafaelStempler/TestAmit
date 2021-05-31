# TestAmit

Installation & Setup

1)	DB:
  a.	Create DB with the name "TestAmit", utf8mb4_unicode_ci. 
  b.	In the project's .env file, make sure DB_DATABASE= TestAmit. 
  c.	In the project's .env file, check that the DB_USERNAME & DB_PASSWORD correspond with your local DB parameters.
  d.	In the terminal, execute the following migration: 
  php artisan migrate

2)	Main page: 
  a.	http://localhost/TestAmit/public/users 

Points of interest

  -	http://localhost/TestAmit/public/users 
  o	Main page, shows current users. 
  o	"+" to add new user & post (task 4 + 2.B + 2.C.iv).
  o	Eye icon to see all posts by that user (task 2.C.ii).  
  
  -	Used guzzle for http request instead of curl, as common in Laravel. 
  o	Navigate to http://localhost/TestAmit/public/users/json to upload users (task 3.a). 
  o	Navigate to http://localhost/TestAmit/public/posts/json to upload posts (task 3.b).

  -	Navigate to http://localhost/TestAmit/public/posts/ $postNumber to see the specific post (task 2.c.i).
  
  -	Bad bot defenses added to .htaccess. 

Missing

-	Task 2.c.iii.
-	Task 5.
-	Task 6. 

