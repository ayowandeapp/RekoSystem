# RekoSystem # 
---------

## Introduction 
Reko is a recommendation system that looks at a set of users with similar taste to a particular user (User-Based Collaborative Filtering). it looks at the items users liked and create a ranked list of suggestions. Firstly, we collected data from the database and converted it into a matrix form. Then we calculated the similarity between the users. Similarity is calculated based on rating. To determine which users are similar we used the Euclidean distance Then we determined the rating a user would give to an item based on the rating of similar users. we predict the rating user U will give the item I.