###### List of all the APIs


+----------+----------------------------------+---------------------------------+---------------------------------------------------------------------------------+
| Method   | URI                              | Name                            | Action                                                                          |
+----------+----------------------------------+---------------------------------+---------------------------------------------------------------------------------+
| POST     | persons                          | Create Person                   | App\Http\Controllers\PersonController@CreatePerson                              |
| GET|HEAD | persons                          | Get All Persons                 | App\Http\Controllers\PersonController@GetAllPerson                              |
| POST     | persons/{id}/posts               | Create Post                     | App\Http\Controllers\PostController@CreatePost                                  |
| GET|HEAD | persons/{id}/posts               | Get All Posts By Person         | App\Http\Controllers\PostController@GetAllPostsByPerson                         |
| GET|HEAD | posts/{id}/comments              | Get All Comments in a Post      | App\Http\Controllers\CommentController@GetAllCommentsOnAPost                    |
| POST     | posts/{id}/comments              | Create Comment in a Post        | App\Http\Controllers\CommentController@CreateComment                            |
+----------+----------------------------------+---------------------------------+---------------------------------------------------------------------------------+
