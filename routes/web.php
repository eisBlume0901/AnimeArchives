<?php

use Illuminate\Http\Request; // For request object
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Use an anonymous function to return a view.
Route - is used to define a new route that matches a URL to a controller or a view.
get - is used to define a new route that matches a GET request to a controller or a view.
'/' - is the URL that the route should match.
function () - is the controller or view that should be returned when the route is matched.
*/
Route::get('/', function () {
    return view('welcome');
});

/*
We can access the php file containing a text of "Hello World"
by using the following route.
*/
Route::get('/hello', function () {
    return "Hello World";
});
/*
Response is used to create a new HTTP response.
Its purpose is to return a response to the user.
Use case:
- Return a view (e.g. a web page)
- Return a file (e.g. an image)
- Return a JSON response (e.g. an API)
- Return a redirect (e.g. to a different page)
- Return a file download (e.g. a PDF)
- Return a response with a status code and message (e.g. 404 - means not found,
    500 - means server error, 200 - means OK)
    - Can also add custom status code and message
- Return a response with headers (e.g. Content-Type, Content-Length) (e.g. to specify the type of the response)
- Return a response with cookies (e.g. to store user data)
 */
Route::get('hello1', function () {
    return response('<h1 style="color: blueviolet">Hello</h1>', 200);
});
/*
Purpose of header is to send a raw HTTP header.
Use case:
- To specify the type of the response (e.g., text/html, application/json)
- To specify the length of the response (e.g., 1024 bytes)
- To specify the location of the response (e.g., /home)
- To specify the status of the response (e.g., 404 - means not found, 500 - means server error, 200 - means OK)
- To specify the cookies of the response (e.g., user data)
- To specify the cache of the response (e.g., how long the response should be cached)
- To specify the encoding of the response (e.g., gzip, deflate)
- To specify the language of the response (e.g., en-US, en-GB)
- To specify the last modified date of the response (e.g., 2021-01-01)
- To specify the content of the response (e.g., text, image, audio, video)
 */
Route::get('hello2', function () {
    return response('<h1 style="color: violet">Hello</h1>', 200)
        ->header('Content-Type', 'text/html');
});

/*
This route returns a view of Post ID in any number.
 */
Route::get('/posts/{id}', function ($id) {
    /*
      dd means dump and die.
      dd is a helper function that dumps the given variables and ends execution of the script.
         It is used to debug the code, for instance, to see the value of a variable.
     */
//    dd($id);
    /*
       ddd means dump, die, and debug.
       ddd is a helper function that dumps the given variables, ends execution of the script,
          and opens the Laravel debugbar.
     */
//    ddd($id);
    return "Post ID: " . $id
    ->where('id', '[0-9]+'); // Adding constraint to the route to only match if the id is a number.
});

/*
 Request's purpose is to get the request object used to get the input from the user.
 Always import the Request class from the Illuminate\Http\Request namespace.
 When using PhpStorm just click the yellow bulb, import class, and choose Illuminate\Http\Request.
 */
Route::get('/search', function(Request $request) {
//    dd($request); // Shows different information about the request such as the URL, method, headers, cookies, and more.
//    dd($request->name); // http://127.0.0.1:8000/search?name=Kate which returns "Kate"
    return "Search: " . $request->name; // Output is "Search: Kate"
});
