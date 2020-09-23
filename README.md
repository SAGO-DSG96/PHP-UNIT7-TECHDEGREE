# H1 Treehouse Techdegree PHP - Project 7 - UNIT TESTING 

## Documentation

* [How will graded](#How-will-graded)

## How will graded?

<!-- step -->
### Crate a Laravel app and connect it to a **MySQL** database using the .env file. 

<!-- step -->
#### Create the Todo Model and Migration containing the id, name, status and timestamps.

<!-- step -->
#### You should have the following routes:
* [GET] /api/todos
* [POST] /api/todos
* [GET] /api/todos/{id}
* [PUT] /api/todos/{id}
* [DELETE] /api/todos/{id}

<!-- step -->
#### When a **[GET]** request is sent, handle the request and return all the Todos.
* Route [GET] /api/todos

<!-- step -->
#### When a Todo is **created**, it will make a request to the server.  Handle the request by creating a Todo and setting the proper status code.
* Route [POST] /api/todos

<!-- step -->
#### When a **[GET]** request is sent with an id, handle the request and return the correct Todo.
* Route [GET] /api/todos/{id}

<!-- step -->
#### When a previously saved Todo is **updated**, it will make a request to the server. Handle the request by updating the existing Todo.
* Route [PUT] /api/todos/{id}


<!-- step -->
#### When a previously saved Todo is **deleted**, it will make a request to the server.  Handle the deletion and return the proper status code.
* Route [DELETE] /api/todos/{id}


# Exceeds Expectations
<!-- step -->
#### Modify the default Welcome view to include a link that return all Todos.

<!-- step -->
#### Create a TodoResource to remove database specific data such as id and timestamps. The TodoResource should remove `id`, `timestamps` from the data returned to the API consumer.

<!-- step -->
#### Handle missing fields with a validation message, for each missing field. For example, if the title is missing, display the an error message like this: 
* "The title field is required."

Happy coding! 🙌🏼
