<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Role;
use App\Models\Category;
use App\Models\PostNew;
use App\Models\Video;
use App\Models\CommentNew;
use App\Models\PostMmp;
use App\Models\TagMmp;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;

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
    return view('welcome');
});

Route::get('/user', [UserController::class, 'GetUser']);

Route::get('/phone',[PhoneController::class, 'PhoneData']);

Route::get('/phone',[PhoneController::class, 'PhoneData']);

Route::get('/post', function (){
    $post = Post::with('comments')->whereId(1)->first();
    return Response::json($post);
    // dd($post->comment);
});

Route::get('/comment', function (){
    $comment = Comment::with('post')->whereId(1)->first();
    return Response::json($comment);
    // dd($post->comment);
});

Route::get('/role', function (){
    // $user = User::find(1);
    // $role=$user->role;
    // dd($role);
    $user = User::with('role')->whereId(1)->first();
    return Response::json($user);
});

Route::get('/user-role', function () {
    // $role = Role::find(1);
    // $user=$role->users;
    // dd($user);
    $role=Role::with('users')->whereId(1)->first();
    return Response::json($role);
});

Route::get('/category', function () {
//    $category=Category::find(1);
//    $items=$category->items;
//    dd($items);
    $category=Category::with('items')->whereId(1)->first();
    return Response::json($category);
});

Route::get('/add-comment',  function (){
    $post=PostNew::find(1);
    $comment = new CommentNew();
    $comment->body="This is a good post";
    $post->commentsNew()->save($comment);

    $video=Video::find(1);
    $comment = new CommentNew();
    $comment->body="This Video is a awesome ";
    $video->commentsNew()->save($comment);
    return "post and Video Comment created";    
});

Route::get('/post-data',function (){
    $post=PostNew::with('commentsNew')->whereId(1)->first();
    return Response::json($post);
});
Route::get('/video-data',function (){
    $video=Video::with('commentsNew')->whereId(1)->first();
    return Response::json($video);
});
Route::get('/comment-data',function (){
    $comment=CommentNew::with('commentable')->whereId(1)->first();
    return Response::json($comment);
});

Route::get('/post-mmp', function (){
    // $post=PostMmp::find(1);
    // $tag = new TagMmp();
    // $tag->name="Php Tutorial";
    // $tag->save();

    // $post->tags()->save($tag);
    // return "post tag created";
});