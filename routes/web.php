<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

use function PHPSTORM_META\map;

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

Route::get('/', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'postsff' => $author->posts

    ]);
});

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);















































































 /*   $files = File::files(resource_path("posts"));
    $post = array_map(function ($file) {
        $document = YamlFrontMatter::parseFile($file);

        return new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }, $files);
   */
  /*  foreach($files as $file) {
        $document = YamlFrontMatter::parseFile($file);

        $post[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }*/





//dd($document);
    //$posts = Post::all();
   /* return view('posts', [
        'posts' => $posts
    ]);*/






   // $path = __DIR__."/../resources/posts/{$slug}.html";


/*
   if(! file_exists($path = __DIR__."/../resources/posts/{$slug}.html")) {
        return redirect('/');
    }
    $post = cache()->remember("posts.{$slug}", 5, fn () => file_get_contents($path));
   // $post = file_get_contents($path);
    return view('post', ['post' => $post ]);
*/

/*
Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

*/


/*

Route::get('post0', function () {
    $post = file_get_contents(__DIR__ . '/../resources/posts/my-second-post.html');
    return view('post', [
        'post' => $post
    ]);
});

Route::get('post1', function () {
    $post = file_get_contents(__DIR__ . '/../resources/posts/my-third-post.html');
    return view('post', [
        'post' => $post
    ]);
});

*/
