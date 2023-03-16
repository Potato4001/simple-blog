<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Post;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $posts = Post::all();
    // dd($posts);

    return view('home', ['posts' => $posts]);
});

Route::get('/post/{id}', function ($id) {
    //dd($id);
    $post = Post::find($id);
    return view('post', ['post' => $post]);
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/createPost', function() {
    //dd($id);
    return view('createPost');
});

Route::post('/createPost', function(Request $request) {
    $post = new Post();
    $post->title = $request->input('title');
    $post->head = $request->input('head');
    $post->body = $request->input('body');
    $post->image = $request->input('image');
    $post->save();

    return view('createPost');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
