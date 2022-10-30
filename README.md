# RekoSystem # 
---------

## Introduction 
Reko is a recommendation system that looks at a set of users with similar taste to a particular user (User-Based Collaborative Filtering). it looks at the items users liked and create a ranked list of suggestions. Firstly, we collected data from the database and converted it into a matrix form. Then we calculated the similarity between the users. Similarity is calculated based on rating. To determine which users are similar we used the Euclidean distance Then we determined the rating a user would give to an item based on the rating of similar users. we predict the rating user U will give the item I.


## Tech Stack (Dependencies)

 * **PHP**, **Apache** and **MSQLI** - as our server language and our database of choice

 You can download and install the dependencies mentioned above as:

- Download and install WAMP 
- Download and install composer from https://getcomposer.org
- Update Composer
	``` composer update ```
- start the Apache and Mysqli

## Development Setup

1. **Clone or Fork the project starter code locally in to the ``` C:\wamp64\www ```**
2. craete a new database
3. setup the database connection in the app/core/DB file, change the databse detail as required
```
<?php

	private $_host = 'localhost';
	private $_username = 'root';
	private $_password = '';
	private $_database = 'recsys';

```
4. create the table in the databse by importing the recsys.sql 
5. **Run the development server:**
```
php -S localhost:8080
```
6. **Verify on the Browser**<br>
Navigate to project homepage [http://127.0.0.1:8080/](http://127.0.0.1:8080/) or [http://localhost:8080](http://localhost:8080)