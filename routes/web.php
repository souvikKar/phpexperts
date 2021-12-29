<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SigninController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;


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
/* For Front Page */
Route::get('/front', function () {
   return view('front');
})->name('frontpage');


//Route::get('/signup',[RegisterController::class,'signup'])->name('signup');
//Route::get('/signin',[CustomAuthController::class,'Login'])->name('login');
//Route::get('/signup',[CustomAuthController::class,'Register'])->name('register');

Route::post('/auth/save',[CustomAuthController::class,'Save'])->name('auth.save');
Route::post('/auth/check',[CustomAuthController::class,'CheckLogin'])->name('auth.check');
Route::get('/auth/display',[CustomAuthController::class,'Display']);


//Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

//Route::post('/custom-signup', [CustomAuthController::class, 'customSignup'])->name('signup.custom'); 


Route::get('/', function () {
    $hometitles = DB::table('titles')->first();
    $homeabouts = DB::table('abouts')->get()->where('id',1);
    $homeworks = DB::table('works')->get();
    $homeeducates = DB::table('educates')->get();
    $contacts= DB::table('contacts')->first();

    return view('home',compact('hometitles','homeabouts','homeworks','homeeducates','contacts'));
})->name('homepage');

// Route::get('/display', function () {
//     $hometitles = DB::table('titles')->first();
//     $homeabouts = DB::table('abouts')->get()->where('id',1);
//     $homeworks = DB::table('works')->get();
//     $homeeducates = DB::table('educates')->get();
//     $contacts= DB::table('contacts')->first();

//     return view('layouts.frontdisplay',compact('hometitles','homeabouts','homeworks','homeeducates','contacts'));
// })->name('displaypage');



/* For Admin Page */
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $counts = User::count();
    $users = DB::table('users')->paginate(5);  
    return view('admin.index',compact('counts','users'));
})->name('dashboard');

Route::get('/auth/github/redirect',[GithubController::class,'redirectToGithub']);
Route::get('/auth/github/callback',[GithubController::class,'handleToGithub']);



Route::get('/test',[TemplateController::class,'test'])->name('all.test');
Route::get('/user/logout',[TemplateController::class,'Logout'])->name('user.logout');

//For Admin Panel
/* Title Management Routes */
Route::get('/home/title',[HomeController::class,'HomeTitle'])->name('home.title');
Route::get('/add/title',[HomeController::class,'AddTitle'])->name('add.title');
Route::post('/store/title',[HomeController::class,'StoreTitle'])->name('store.title');
Route::get('/title/edit/{id}',[HomeController::class,'Edit']);
Route::post('/title/update/{id}',[HomeController::class,'Update']);
Route::get('/title/delete/{id}',[HomeController::class,'Delete']);

/* About Management Routes */
Route::get('/home/about',[AboutController::class,'HomeAbout'])->name('home.about');
Route::get('/add/about',[AboutController::class,'AddAbout'])->name('add.about');
Route::post('/store/about',[AboutController::class,'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}',[AboutController::class,'EditAbout']);
Route::post('/about/update/{id}',[AboutController::class,'UpdateAbout']);
Route::get('/about/delete/{id}',[AboutController::class,'Delete']);

//Route::get('/dashboard',[UserController::class,'UsersCount'])->name('dashboard');

/* Work Management Routes*/
Route::get('/home/work',[WorkController::class,'HomeWork'])->name('home.work');
Route::get('/add/work',[WorkController::class,'AddWork'])->name('add.work');
Route::post('/store/work',[WorkController::class,'StoreWork'])->name('store.work');
Route::get('/work/edit/{id}',[WorkController::class,'EditWork']);
Route::post('/work/update/{id}',[WorkController::class,'UpdateWork']);
Route::get('/work/delete/{id}',[WorkController::class,'Delete']);

/* Education Management Routes */
Route::get('/home/education',[EducationController::class,'HomeEducation'])->name('home.education');
Route::get('/add/education',[EducationController::class,'AddEducation'])->name('add.education');
Route::post('/store/education',[EducationController::class,'StoreEducation'])->name('store.education');
Route::get('/education/edit/{id}',[EducationController::class,'EditEducation']);
Route::post('/education/update/{id}',[EducationController::class,'UpdateEducation']);
Route::get('/education/delete/{id}',[EducationController::class,'Delete']);

//Route::get('/contact/form',[ContactController::class,'HomeContact'])->name('home.contact');
Route::post('/contact/form',[ContactController::class,'ContactForm'])->name('contact.form');
Route::get('/admin/message', [ContactController::class,'AdminMessage'])->name('admin.message');
Route::get('/message/delete/{id}',[ContactController::class,'Delete']);
