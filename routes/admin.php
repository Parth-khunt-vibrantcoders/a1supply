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
    Route::post('save-change-password', [DashboardController::class, 'save_password'])->name('save-change-password');
    Route::get('update-profile', [DashboardController::class, 'update_profile'])->name('update-profile');
    Route::post('save-update-profile', [DashboardController::class, 'save_profile'])->name('save-update-profile');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('my-report-ajaxcall', [DashboardController::class, 'ajaxcall'])->name('my-report-ajaxcall');
    Route::post('common-ajaxcall', [CommonController::class, 'ajaxcall'])->name('common-ajaxcall');
});



?>
