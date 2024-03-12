<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CmsController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

// Admin Routes
Route::prefix('/admin')->group(function (){

    // Admin Login
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login']);
   
    Route::group(['middleware'=>['admin']], function(){
        // Admin Dashboard
        Route::get('dashboard', [AdminController::class, 'adminDashboard']);

        // Admin Update Password
        Route::match(['get', 'post'],'update-password', [AdminController::class, 'updatePassword']);

        // Admin Update Details
        Route::match(['get', 'post'], 'update-details', [AdminController::class, 'updateDetails']);

        // Admin Check current password
        Route::post('check-current-password', [AdminController::class, 'checkCurrentPassword']);

        // Admin Logout
        Route::get('logout', [AdminController::class, 'logout']);

        // Display Cms Pages(CRUD read)
         Route::get('cms-pages', [CmsController::class, 'index']); 
         
        //  Update CMS pages status
        Route::post('update-cms-pages-status', [CmsController::class, 'update']);

        // Add CMS Page
        Route::match(['get', 'post'], 'add-edit-cms-page/{id?}', [CmsController::class, 'edit']);

        // Delete CMS Page
        Route::get('delete-cms-page/{id?}', [CmsController::class, 'destroy']);

        // Sub Admin 
        Route::get('subadmins', [AdminController::class, 'subadmins']);

        // Sub admin status
        Route::post('update-subadmin-status', [AdminController::class, 'updateSubadminStatus']);

        // Add Edit Subadmin
        Route::match(['get', 'post'], 'add-edit-subadmin/{id?}', [AdminController::class, 'addEditSubadmin']);

        // Setting Roles for Subadmins
        Route::match(['get', 'post'], 'update-role/{id}', [AdminController::class, 'updateRole']);

        // Delete Sub admins
        Route::get('delete-subadmin/{id?}', [AdminController::class, 'deleteSubadmin']);

        // Update Vendor Details
        Route::match(['get', 'post'], 'update-vendor-details/{slug}', [AdminController::class, 'updateVendorDetails']);

        // View Admins/Sub admins/Vendors
        Route::get('admins/{type?}', [AdminController::class, 'admins']);

        // View vendor details
        Route::get('view-vendor-details/{id}', [AdminController::class, 'viewVendorDetails']);

        // Update Vendor Status
        Route::post('update-vendor-status', [AdminController::class, 'updateVendorStatus']);
    });
});