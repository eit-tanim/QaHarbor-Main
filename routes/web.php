<?php

use App\Http\Controllers\Backend\AdminDashboardController;
use App\Http\Controllers\Backend\AdminHomeBannerController;
use App\Http\Controllers\Candidate\CandidateController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Recruiter\RecruiterController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminHomeServiceController;

use App\Http\Controllers\Backend\AdminHomeTesimonialController;

use App\Http\Controllers\Backend\AwesomeThingController;

use App\Http\Controllers\Backend\AdminAchievementController;




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

// Frontend 
Route::get('/', [IndexController::class, "index"])->name('home');
Route::get('/job', [PageController::class, 'JobPage'])->name('job');
Route::get('/sqa-service', [PageController::class, 'SqaServices'])->name('sqa-service');
Route::get('/sqa-expert', [PageController::class, 'SqaExpert'])->name('sqa-expert');
Route::get('/about', [PageController::class, 'AboutPage'])->name('about');
Route::get('/blog', [PageController::class, 'BlogPage'])->name('blog');
Route::get('/free', [PageController::class, 'Consultation'])->name('consultation');



// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'AdminDashboard'])->name('admin.dashbord');

    Route::get('/admin/home-banner', [AdminHomeBannerController::class, 'Index'])->name('admin.home-banner');

    Route::post('/admin/home-banner-update', [AdminHomeBannerController::class, 'BannerUpdate'])->name('admin.home-banner-update');
});

// Candidate
Route::middleware(['auth', 'role:candidate'])->group(function () {
    Route::get('/candidate/account', [CandidateController::class, 'CandidateAccount'])->name('candidate.account');
});

// Recruiter
Route::middleware(['auth', 'role:recruiter'])->group(function () {
    Route::get('/recruiter/account', [RecruiterController::class, 'RecruiterAccount'])->name('recruiter.account');
});


// Backend

// Our-Services
Route::prefix('admin')->group(function () {
    Route::get('services', [AdminHomeServiceController::class, 'index'])->name('admin.services.index');
    Route::get('services/create', [AdminHomeServiceController::class, 'create'])->name('admin.services.create');
    Route::post('services', [AdminHomeServiceController::class, 'store'])->name('admin.services.store');
    Route::get('services/{service}/edit', [AdminHomeServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('services/{service}', [AdminHomeServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('services/{service}', [AdminHomeServiceController::class, 'destroy'])->name('admin.services.destroy');
});


// Testimonial
Route::prefix('admin')->group(function () {
    Route::get('/testimonials', [AdminHomeTesimonialController::class, 'index'])->name('admin.testimonials.index');
    Route::get('/testimonials/create', [AdminHomeTesimonialController::class, 'create'])->name('admin.testimonials.create');
    Route::post('/testimonials', [AdminHomeTesimonialController::class, 'store'])->name('admin.testimonials.store');
    Route::get('/testimonials/{id}/edit', [AdminHomeTesimonialController::class, 'edit'])->name('admin.testimonials.edit');
    Route::put('/testimonials/{id}', [AdminHomeTesimonialController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('/testimonials/{id}', [AdminHomeTesimonialController::class, 'destroy'])->name('admin.testimonials.destroy');
});


//Awesome Thing About Us
Route::prefix('admin')->group(function () {

    // Route resource for AwesomeThingController (CRUD operations)
    Route::resource('awesome', AwesomeThingController::class)->names([
        'index' => 'admin.awesome.index',
        'create' => 'admin.awesome.create',
        'store' => 'admin.awesome.store',
        'edit' => 'admin.awesome.edit',
        'update' => 'admin.awesome.update',
        'destroy' => 'admin.awesome.destroy',
    ]);
});


// Achievement

// Route to show the form and current achievements
Route::get('/admin/achievements', [AdminAchievementController::class, 'index'])->name('backend.achievement.index');

// Route to handle the form submission for updating achievements
Route::post('/admin/achievements/update', [AdminAchievementController::class, 'update'])->name('backend.achievement.update');





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
