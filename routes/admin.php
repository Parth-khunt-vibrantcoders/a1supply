<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\dashboard\DashboardController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\dashboard\SystemsettingController;
use App\Http\Controllers\backend\audittrails\AuditTrailsController;
use App\Http\Controllers\backend\brand_entry\BrandentryController;
use App\Http\Controllers\backend\CommonController;
use App\Http\Controllers\backend\dashboard\SmtpsettingController;
use App\Http\Controllers\backend\user_management\UserManagementController;
use App\Http\Controllers\backend\users\UsersController;
use App\Http\Controllers\backend\users\SubscriberController;
use App\Http\Controllers\backend\device\DiviceController;
use App\Http\Controllers\backend\mobile_number\MobilenumberController;
use App\Http\Controllers\backend\import_data\ImportdataController;
use App\Http\Controllers\backend\mobile_report\MobilereportController;
use App\Http\Controllers\backend\user_report\UserreportController;


Route::get('admin-logout', [LoginController::class, 'logout'])->name('admin-logout');

$adminPrefix = "admin";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {
    Route::get('change-password', [DashboardController::class, 'change_password'])->name('change-password');
    Route::post('save-password', [DashboardController::class, 'save_password'])->name('save-password');

    Route::get('update-profile', [DashboardController::class, 'update_profile'])->name('update-profile');
    Route::post('admin-save-profile', [DashboardController::class, 'save_profile'])->name('admin-save-profile');

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::post('common-ajaxcall', [CommonController::class, 'ajaxcall'])->name('common-ajaxcall');
});

Route::group(['prefix' => $adminPrefix, 'middleware' => ['contant-us']], function() {
    Route::get('contant-us-list', [DashboardController::class, 'change_password'])->name('contant-us-list');
    Route::post('contant-us-ajaxcall', [CommonController::class, 'ajaxcall'])->name('contant-us-ajaxcall');
});



?>
