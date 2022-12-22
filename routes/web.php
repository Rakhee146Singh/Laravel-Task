<?php

use App\Models\Task;
use App\Models\User;
use App\Models\Article;
use App\Models\Project;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\StudentController;

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
//simple eloquent orm with simple validate
// Route::get('/', [StudentController::class, 'index'])->name('index');
// Route::post('/', [StudentController::class, 'create'])->name('create');
// Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [StudentController::class, 'update'])->name('update');
// Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('destroy');


//soft delete and hard delete
// Route::get('/', [ArticleController::class, 'article']);
// Route::get('/softDelete/{id}', [ArticleController::class, 'softDelete']);
// Route::get('/forceDelete/{id}', [ArticleController::class, 'forceDelete']);
// Route::get('/trashed', [ArticleController::class, 'trashed']);
// Route::get('/restore/{id}', [ArticleController::class, 'restore']);
// Route::get('restoreAll', [ArticleController::class, 'restoreAll']);


//collection
//Route::get('/', [UserController::class, 'index'])->name('index');

//subqueries without relations
// Route::get('/', function () {
//     $student = Student::addSelect([
//         'new' => Article::select('author')
//             ->whereColumn('id', 'students.id')
//             ->orderByDesc('title')
//             ->limit(1)
//     ])->get();
//     dd($student);
//return view('student', compact('student'));
//});

//Pagination Route
//Route::get('/', [ArticleController::class, 'home']);

//eloquent relationships(one to one)belongsTo and HasOne method
//Route::get('/', [UserController::class, 'index']);

//for has many and has through
// Route::get('/', function () {
//     $project = Project::with('tasks')->get();
//     //return $project->user[1]->task;//normal data for tables
//     //return ($project->task); //data fetching of direct third table
//     dd($project->toArray()); //data fetching for hasonethrough method
//creating data
// $project = Project::create([
//     'title' => 'Project B',
// ]);
// $user3 = User::create([
//     'project_id' => $project->id,
//     'name' => 'User 3',
//     'email' => 'user3@example.com',
//     'password' => Hash::make('password')
// ]);
// $user4 = User::create([
//     'project_id' => $project->id,
//     'name' => 'User 4',
//     'email' => 'user4@example.com',
//     'password' => Hash::make('password')
// ]);
// $user5 = User::create([
//     'project_id' => $project->id,
//     'name' => 'User 5',
//     'email' => 'user5@example.com',
//     'password' => Hash::make('password')
// ]);
// $task1 = Task::create([
//     'user_id' => $user3->id,
//     'title' => 'Task 4 for project 2 by user 3'
// ]);
// $task2 = Task::create([
//     'user_id' => $user4->id,
//     'title' => 'Task 4 for project 2 by user 3'
// ]);
// $task3 = Task::create([
//     'user_id' => $user5->id,
//     'title' => 'Task 5 for project 2 by user 4'
// ]);
// $task3 = Task::create([
//     'user_id' => $user5->id,
//     'title' => 'Task 6 for project 2 by user 5'
// ]);
//});

//Eloquent relationship of many to many relationships
// Route::get('/', [SongController::class, 'add_song']);
// Route::get('/singer', [SingerController::class, 'add_singer']);
// Route::get('/show/{id}', [SongController::class, 'show_song']);
// Route::get('/show-singer/{id}', [SingerController::class, 'show_singer']);

//Polymorphic Relationship(one to many)
// Route::get('/', [PhotoController::class, 'add_photo']);
// Route::get('/show/{id}', [PhotoController::class, 'show_photo']);
// Route::get('/video', [VideoController::class, 'add_video']);
// Route::get('/show-video/{id}', [VideoController::class, 'show_video']);

//Polymorphic Relationship(one to one)
// Route::get('/', [PictureController::class, 'add_picture']);
// Route::get('/show', [PictureController::class, 'show_picture']);
// Route::get('/person', [PersonController::class, 'add_person']);
// Route::get('/show-person', [PersonController::class, 'show_person']);

//Polymorphic Relationship(many to many)
Route::get('/', [PhotoController::class, 'add_photo']);
Route::get('/show', [TagController::class, 'show_photo']);
Route::get('/video', [TagController::class, 'show_video']);
Route::get('/show-video/{id}', [VideoController::class, 'show_video']);
Route::get('/tag', [TagController::class, 'add_tag']);
Route::get('/add', [VideoController::class, 'add_video']);
