<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\OperatorListController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\PromoteRegistrantController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\RegistrantBiodataExportController;
use App\Http\Controllers\Auth\RegistrantListController;
use App\Http\Controllers\Auth\RegistrantsTableExportController;
use App\Http\Controllers\Auth\RegistrationStatusController;
use App\Http\Controllers\Auth\ScheduleController;
use App\Http\Controllers\Auth\VerifiedRegistrantController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:operator|admin'])->group(function () {
    Route::controller(RegistrationStatusController::class)->group(function () {
        Route::put('status/open', 'open')->name('status.open');
        Route::put('status/close', 'close')->name('status.close');
    });

    Route::controller(RegistrantListController::class)->group(function () {
        Route::get('registrant', 'index')->name('registrant.index');
        Route::post('registrant/biodata', 'store')->name('registrant.biodata.store');
        Route::get('registrant/{user}', 'show')->name('registrant.show');
        Route::delete('registrant/{user}', 'delete')->name('registrant.delete');

        Route::delete('registrants/unverified/delete', 'deleteUnverified')->name('registrant.unverified.delete');
        Route::delete('registrants/all/delete', 'deleteAll')->name('registrant.all.delete');
    });

    Route::controller(RegistrantBiodataExportController::class)->group(function () {
        Route::get('registrant/pdf/{identifier}', 'preview')->name('registrant.pdf.preview');
        Route::get('registrant/pdf/{identifier}/{code}/manual', 'manual')->name('registrant.pdf.manual');
        Route::get('registrant/pdf/{identifier}/{code}/auto', 'auto')->name('registrant.pdf.auto');
    });

    Route::controller(RegistrantsTableExportController::class)->group(function () {
        Route::get('registrant/table/pdf/preview', 'preview')->name('registrant.table.pdf.preview');
        Route::get('registrant/table/pdf/manual', 'tableManual')->name('registrant.table.pdf.manual');
        Route::get('registrant/table/pdf/auto', 'tableAuto')->name('registrant.table.pdf.auto');
    });

    Route::controller(VerifiedRegistrantController::class)->group(function () {
        Route::put('verify/{user}', 'verify')->name('registrant.verify');
        Route::put('unverify/{user}', 'unverify')->name('registrant.unverify');
    });

    Route::controller(ScheduleController::class)->group(function () {
        Route::get('schedule', 'index')->name('schedule.index');
        Route::post('schedule', 'store')->name('schedule.store');
        Route::get('schedule/{schedule}', 'edit')->name('schedule.edit');
        Route::put('schedule/{schedule}', 'update')->name('schedule.update');

        Route::put('schdule/activate/{schedule}', 'activate')->name('schedule.activate');
        Route::put('schdule/deactivate/{schedule}', 'deactivate')->name('schedule.deactivate');

        route::delete('schedule/{schedule}', 'delete')->name('schedule.delete');
    });
});

Route::middleware(['role:admin'])->group(function () {
    Route::put('promote/{user}', PromoteRegistrantController::class)->name('registrant.promote');

    Route::controller(OperatorListController::class)->group(function () {
        Route::get('operator', 'index')->name('operator.index');
        Route::get('operator/{user}', 'show')->name('operator.show');
        Route::get('operator/create', 'create')->name('operator.create');
        Route::post('operator/create', 'store')->name('operator.store');
        Route::put('operator/forget-password', 'operatorForgetPassword')->name('operator.forget.password');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
