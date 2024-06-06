<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\CareersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DioceseDepartmentController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\ExactiveController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HealthsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ParishController;
use App\Http\Controllers\Admin\ParishDepartmentController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\SchoolsController;
use App\Http\Controllers\Admin\SermonsController;
use App\Http\Controllers\Admin\VerseController;
use App\Http\Controllers\SitePagesController;
use App\Http\Controllers\Admin\serviceController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\staffCotroller;
use Illuminate\Support\Facades\Auth;

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




Route::get('/',[HomeController::class, 'index']);

//Auth Admin Route
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/admin_login',[LoginController::class, 'Admin_Login'])->name('admin_login');
Route::post('/signout', [LoginController::class, 'signOut'])->name('signout');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

//site controllers
Route::get('/catholic_diocese',[SitePagesController::class, 'catholic_diocese'])->name('catholic_diocese');

Route::get('/research_institute',[SitePagesController::class,'research'])->name('research_institute');

Route::get('/departiment',[SitePagesController::class,'departiment'])->name('departiment');

Route::get ('/contact',[SitePagesController::class,'contact'])->name('contact');

Route::get('/schools', [SitePagesController::class, 'schools'])->name('schools');
Route::get('/healths', [SitePagesController::class, 'healths'])->name('healths');
Route::get('/news_events',[SitePagesController::class, 'news_event'])->name('newsandevents');
// Route::get('/newssingle',[SitePagesController::class,'singleandnews'])->name('newssingle');
Route::get ('/gallery',[SitePagesController::class, 'gallery'])->name('album_picha');
Route::get('/video',[SitePagesController::class,'video'])->name('maktaba_video');
Route::get('/careers',[SitePagesController::class,'careers'])->name('careers');
// news site
Route::get('/single_news/{id}',[SitePagesController::class, 'news_single'])->name('single_news');
Route::get('/single_events/{id}',[SitePagesController::class, 'single_events'])->name('single_events');
Route::get('/single_service_education/{id}',[SitePagesController::class, 'single_service_education'])->name('single_service_education');
Route::get('/single_service_bible/{id}',[SitePagesController::class, 'single_service_bible'])->name('single_service_bible');
Route::get('/single_service_health/{id}',[SitePagesController::class, 'single_service_health'])->name('single_service_health');

//Admin Route
//Route::get('/admin/dashboard',[DashboardController::class, 'index']);
Route::middleware(['auth'])->group(function () {
//news routes
Route::get('/admin/news',[NewsController::class, 'index'])->name('admin_news');
Route::post('/admin/add_news',[NewsController::class, 'store'])->name('admin_addnews');
Route::get('/admin/edit_news/{id}', [NewsController::class, 'edit'])->name('admin_editnews');
Route::get('/admin/delete_news/{id}', [NewsController::class, 'destroy'])->name('admin_deletenews');
Route::put('/admin/update_news/{id}', [NewsController::class, 'update'])->name('admin_updatenews');

//events route
Route::get('/admin/events',[EventsController::class, 'index'])->name('admin_events');
Route::post('/admin/add_events',[EventsController::class, 'store'])->name('admin_addevents');
Route::get('/admin/edit_events/{id}', [EventsController::class, 'edit'])->name('admin_editevents');
Route::get('/admin/delete_events/{id}', [EventsController::class, 'destroy'])->name('admin_deleteevents');
Route::put('/admin/update_events/{id}', [EventsController::class, 'update'])->name('admin_updateevents');

//parish route
Route::get('/admin/parish',[ParishController::class, 'index'])->name('admin_parish');
Route::post('/admin/add_parish',[ParishController::class, 'store'])->name('admin_addparish');
Route::get('/admin/edit_parish/{id}', [ParishController::class, 'edit'])->name('admin_editparish');
Route::get('/admin/delete_parish/{id}', [ParishController::class, 'destroy'])->name('admin_deleteparish');
Route::put('/admin/update_parish/{id}', [ParishController::class, 'update'])->name('admin_updateparish');

//school route
Route::get('/admin/school',[SchoolsController::class, 'index'])->name('admin_school');
Route::post('/admin/add_school',[SchoolsController::class, 'store'])->name('admin_addschool');
Route::get('/admin/edit_school/{id}', [SchoolsController::class, 'edit'])->name('admin_editschool');
Route::get('/admin/delete_school/{id}', [SchoolsController::class, 'destroy'])->name('admin_deleteschool');
Route::put('/admin/update_school/{id}', [SchoolsController::class, 'update'])->name('admin_updateschool');

//health institute route
Route::get('/admin/health',[HealthsController::class, 'index'])->name('admin_health');
Route::post('/admin/add_health',[HealthsController::class, 'store'])->name('admin_addhealth');
Route::get('/admin/edit_health/{id}', [HealthsController::class, 'edit'])->name('admin_edithealth');
Route::get('/admin/delete_health/{id}', [HealthsController::class, 'destroy'])->name('admin_deletehealth');
Route::put('/admin/update_health/{id}', [HealthsController::class, 'update'])->name('admin_updatehealth');

//About us route
Route::get('/admin/summary',[AboutUsController::class, 'summary'])->name('diocese_summary');
Route::post('/admin/add_summary',[AboutUsController::class, 'storeSummary'])->name('add_summary');
Route::get('/admin/edit_summary/{id}', [AboutUsController::class, 'editsummary'])->name('admin_editsummary');
Route::get('/admin/delete_summary/{id}', [AboutUsController::class, 'destroysummary'])->name('admin_deletesummary');
Route::put('/admin/update_summary/{id}', [AboutUsController::class, 'updatesummary'])->name('admin_updatesummary');

//Sermons route
Route::get('/admin/sermons',[SermonsController::class, 'index'])->name('admin_sermons');
Route::post('/admin/add_sermons',[SermonsController::class, 'store'])->name('add_sermons');
Route::get('/admin/edit_sermons/{id}', [SermonsController::class, 'edit'])->name('edit_sermons');
Route::get('/admin/delete_sermons/{id}', [SermonsController::class, 'destroy'])->name('delete_sermons');
Route::put('/admin/update_sermons/{id}', [SermonsController::class, 'update'])->name('update_sermons');

//Verse of day route
Route::get('/admin/verse',[VerseController::class, 'index'])->name('admin_verse');
Route::post('/admin/add_verse',[VerseController::class, 'store'])->name('add_verse');
Route::get('/admin/edit_verse/{id}', [VerseController::class, 'edit'])->name('edit_verse');
Route::get('/admin/delete_verse/{id}', [VerseController::class, 'destroy'])->name('delete_verse');
Route::put('/admin/update_verse/{id}', [VerseController::class, 'update'])->name('update_verse');

//Gallery route
Route::get('/admin/gallery',[GalleryController::class, 'index'])->name('admin_gallery');
Route::post('/admin/add_gallery',[GalleryController::class, 'store'])->name('add_gallery');
Route::get('/admin/edit_gallery/{id}', [GalleryController::class, 'edit'])->name('edit_gallery');
Route::get('/admin/delete_gallery/{id}', [GalleryController::class, 'destroy'])->name('delete_gallery');
Route::put('/admin/update_gallery/{id}', [GalleryController::class, 'update'])->name('update_gallery');

//Service route
Route::get('/admin/service',[serviceController::class, 'index'])->name('admin_service');
Route::post('/admin/add_service',[serviceController::class, 'store'])->name('add_service');
Route::get('/admin/edit_service/{id}', [serviceController::class, 'edit'])->name('edit_service');
Route::get('/admin/delete_service/{id}', [serviceController::class, 'destroy'])->name('delete_service');
Route::put('/admin/update_service/{id}', [serviceController::class, 'update'])->name('update_service');

//slider route
Route::get('/admin/slider',[HomeSliderController::class, 'index'])->name('admin_slider');
Route::post('/admin/add_slider',[HomeSliderController::class, 'store'])->name('add_slider');
Route::get('/admin/edit_slider/{id}', [HomeSliderController::class, 'edit'])->name('edit_slider');
Route::get('/admin/delete_slider/{id}', [HomeSliderController::class, 'destroy'])->name('delete_slider');
Route::put('/admin/update_slider/{id}', [HomeSliderController::class, 'update'])->name('update_slider');

//staff route
Route::get('/admin/staff',[staffCotroller::class,'index'])->name('admin_exactive_staff');
Route::post('/admin/add_staff',[staffCotroller::class, 'store'])->name('add_staff');
Route::get('/admin/edit_staff/{id}', [staffCotroller::class, 'edit'])->name('edit_staff');
Route::get('/admin/delete_staff/{id}', [staffCotroller::class, 'destroy'])->name('delete_staff');
Route::put('/admin/update_staff/{id}', [staffCotroller::class, 'update'])->name('update_staff');
Route::get('/admin/Management_staff',[staffCotroller::class,'index_management'])->name('admin_management_staff');
Route::get('/admin/Historical_staff/executive',[staffCotroller::class,'index_historical_executive'])->name('admin_historical_staff_executive');
Route::get('/admin/Historical_staff/management',[staffCotroller::class,'index_historical_management'])->name('admin_historical_staff_management');

//Derpartment route
Route::get('/admin/Diocese_Department',[DioceseDepartmentController::class,'index'])->name('admin_DioceseDepartment');
Route::post('/admin/create_DioceseDepartment/', [DioceseDepartmentController::class, 'create'])->name('create_DioceseDepartment');
Route::get('/admin/delete_DioceseDepartment/{id}', [DioceseDepartmentController::class, 'destroy'])->name('delete_DioceseDepartment');
Route::put('/admin/update_DioceseDepartment/{id}', [DioceseDepartmentController::class, 'update'])->name('update_DioceseDepartment');
Route::get('/admin/edit_DioceseDepartment/{id}', [DioceseDepartmentController::class, 'edit'])->name('edit_DioceseDepartment');
// Route::get('/admin/Parish_Department',[DioceseDepartmentController::class,'index'])->name('admin_DioceseDepartment');

Route::get('/admin/research',[ResearchController::class,'index'])->name('admin_research');


//Library  pages
Route::get('/admin/library/videos',[LibraryController::class,'videos'])->name('admin_library_videos');
Route::post('/admin/library/videos',[LibraryController::class,'store'])->name('library_video_store');
Route::put('/admin/library/videos/{id}',[LibraryController::class,'updateVideo'])->name('library_videos_update');
Route::get('/admin/library/single_video/{id}',[LibraryController::class,'Single_video'])->name('Single_video');
Route::delete('/admin/library/videos/{id}',[LibraryController::class,'deleteVideo'])->name('deleteVideo');



Route::get('/admin/career',[CareersController::class, 'index'])->name('admin_careers');
Route::get('/admin/career/{id}',[CareersController::class,'show'])->name('show_careers');
Route::post('/admin/career',[CareersController::class,'create'])->name('create_careers');
Route::put('/admin/career/{id}',[CareersController::class,'update'])->name('update_careers');
Route::delete('/admin/career/{id}',[CareersController::class,'destroy'])->name('destory_careers');


Route::get('/admin/library/photos',[LibraryController::class,'photos'])->name('admin_library_photos');
Route::post('/admin/library/photos',[LibraryController::class,'create'])->name('library_photo_store');
Route::get('/admin/library/photos/{id}',[LibraryController::class,'single_photo'])->name('single_photo');
Route::put('/admin/library/photos/{id}',[LibraryController::class,'update'])->name('library_photos_update');
Route::delete('/admin/library/photos/{id}',[LibraryController::class,'destroy'])->name('library_photos_delete');
//Feedback  pages

Route::get('/admin/feedback',[FeedbackController::class,'index'])->name('feedback');
Route::post('/add_feedback',[FeedbackController::class, 'store'])->name('add_feedback');

//library

});




