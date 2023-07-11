<?php

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\WeightedProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('pages.home');
});

Route::prefix('criteria')->group(function () {
    Route::get('/', [CriteriaController::class, 'index'])->name('criteria.index');
    Route::get('/sets/{id}', [CriteriaController::class, 'sets_of_criteria'])->name('criteria.sets');
});

Route::get('alternative', [AlternativeController::class, 'index'])->name('alternative.index');

Route::prefix('dss')->group(function () {
    Route::get('wp', [WeightedProductController::class, 'index'])->name('dss.wp');
});

Route::prefix('stisla')->group(function () {
    // Dashboard
    Route::redirect('/', '/stisla/dashboard-general-dashboard');
    Route::get('/dashboard-general-dashboard', function () {
        return view('stisla.pages.dashboard-general-dashboard', ['type_menu' => 'dashboard']);
    });
    Route::get('/dashboard-ecommerce-dashboard', function () {
        return view('stisla.pages.dashboard-ecommerce-dashboard', ['type_menu' => 'dashboard']);
    });


    // Layout
    Route::get('/layout-default-layout', function () {
        return view('stisla.pages.layout-default-layout', ['type_menu' => 'layout']);
    });

    // Blank Page
    Route::get('/blank-page', function () {
        return view('stisla.pages.blank-page', ['type_menu' => '']);
    });

    // Bootstrap
    Route::get('/bootstrap-alert', function () {
        return view('stisla.pages.bootstrap-alert', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-badge', function () {
        return view('stisla.pages.bootstrap-badge', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-breadcrumb', function () {
        return view('stisla.pages.bootstrap-breadcrumb', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-buttons', function () {
        return view('stisla.pages.bootstrap-buttons', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-card', function () {
        return view('stisla.pages.bootstrap-card', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-carousel', function () {
        return view('stisla.pages.bootstrap-carousel', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-collapse', function () {
        return view('stisla.pages.bootstrap-collapse', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-dropdown', function () {
        return view('stisla.pages.bootstrap-dropdown', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-form', function () {
        return view('stisla.pages.bootstrap-form', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-list-group', function () {
        return view('stisla.pages.bootstrap-list-group', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-media-object', function () {
        return view('stisla.pages.bootstrap-media-object', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-modal', function () {
        return view('stisla.pages.bootstrap-modal', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-nav', function () {
        return view('stisla.pages.bootstrap-nav', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-navbar', function () {
        return view('stisla.pages.bootstrap-navbar', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-pagination', function () {
        return view('stisla.pages.bootstrap-pagination', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-popover', function () {
        return view('stisla.pages.bootstrap-popover', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-progress', function () {
        return view('stisla.pages.bootstrap-progress', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-table', function () {
        return view('stisla.pages.bootstrap-table', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-tooltip', function () {
        return view('stisla.pages.bootstrap-tooltip', ['type_menu' => 'bootstrap']);
    });
    Route::get('/bootstrap-typography', function () {
        return view('stisla.pages.bootstrap-typography', ['type_menu' => 'bootstrap']);
    });


    // components
    Route::get('/components-article', function () {
        return view('stisla.pages.components-article', ['type_menu' => 'components']);
    });
    Route::get('/components-avatar', function () {
        return view('stisla.pages.components-avatar', ['type_menu' => 'components']);
    });
    Route::get('/components-chat-box', function () {
        return view('stisla.pages.components-chat-box', ['type_menu' => 'components']);
    });
    Route::get('/components-empty-state', function () {
        return view('stisla.pages.components-empty-state', ['type_menu' => 'components']);
    });
    Route::get('/components-gallery', function () {
        return view('stisla.pages.components-gallery', ['type_menu' => 'components']);
    });
    Route::get('/components-hero', function () {
        return view('stisla.pages.components-hero', ['type_menu' => 'components']);
    });
    Route::get('/components-multiple-upload', function () {
        return view('stisla.pages.components-multiple-upload', ['type_menu' => 'components']);
    });
    Route::get('/components-pricing', function () {
        return view('stisla.pages.components-pricing', ['type_menu' => 'components']);
    });
    Route::get('/components-statistic', function () {
        return view('stisla.pages.components-statistic', ['type_menu' => 'components']);
    });
    Route::get('/components-tab', function () {
        return view('stisla.pages.components-tab', ['type_menu' => 'components']);
    });
    Route::get('/components-table', function () {
        return view('stisla.pages.components-table', ['type_menu' => 'components']);
    });
    Route::get('/components-user', function () {
        return view('stisla.pages.components-user', ['type_menu' => 'components']);
    });
    Route::get('/components-wizard', function () {
        return view('stisla.pages.components-wizard', ['type_menu' => 'components']);
    });

    // forms
    Route::get('/forms-advanced-form', function () {
        return view('stisla.pages.forms-advanced-form', ['type_menu' => 'forms']);
    });
    Route::get('/forms-editor', function () {
        return view('stisla.pages.forms-editor', ['type_menu' => 'forms']);
    });
    Route::get('/forms-validation', function () {
        return view('stisla.pages.forms-validation', ['type_menu' => 'forms']);
    });

    // google maps
    // belum tersedia

    // modules
    Route::get('/modules-calendar', function () {
        return view('stisla.pages.modules-calendar', ['type_menu' => 'modules']);
    });
    Route::get('/modules-chartjs', function () {
        return view('stisla.pages.modules-chartjs', ['type_menu' => 'modules']);
    });
    Route::get('/modules-datatables', function () {
        return view('stisla.pages.modules-datatables', ['type_menu' => 'modules']);
    });
    Route::get('/modules-flag', function () {
        return view('stisla.pages.modules-flag', ['type_menu' => 'modules']);
    });
    Route::get('/modules-font-awesome', function () {
        return view('stisla.pages.modules-font-awesome', ['type_menu' => 'modules']);
    });
    Route::get('/modules-ion-icons', function () {
        return view('stisla.pages.modules-ion-icons', ['type_menu' => 'modules']);
    });
    Route::get('/modules-owl-carousel', function () {
        return view('stisla.pages.modules-owl-carousel', ['type_menu' => 'modules']);
    });
    Route::get('/modules-sparkline', function () {
        return view('stisla.pages.modules-sparkline', ['type_menu' => 'modules']);
    });
    Route::get('/modules-sweet-alert', function () {
        return view('stisla.pages.modules-sweet-alert', ['type_menu' => 'modules']);
    });
    Route::get('/modules-toastr', function () {
        return view('stisla.pages.modules-toastr', ['type_menu' => 'modules']);
    });
    Route::get('/modules-vector-map', function () {
        return view('stisla.pages.modules-vector-map', ['type_menu' => 'modules']);
    });
    Route::get('/modules-weather-icon', function () {
        return view('stisla.pages.modules-weather-icon', ['type_menu' => 'modules']);
    });

    // auth
    Route::get('/auth-forgot-password', function () {
        return view('stisla.pages.auth-forgot-password', ['type_menu' => 'auth']);
    });
    Route::get('/auth-login', function () {
        return view('stisla.pages.auth-login', ['type_menu' => 'auth']);
    });
    Route::get('/auth-login2', function () {
        return view('stisla.pages.auth-login2', ['type_menu' => 'auth']);
    });
    Route::get('/auth-register', function () {
        return view('stisla.pages.auth-register', ['type_menu' => 'auth']);
    });
    Route::get('/auth-reset-password', function () {
        return view('stisla.pages.auth-reset-password', ['type_menu' => 'auth']);
    });

    // error
    Route::get('/error-403', function () {
        return view('stisla.pages.error-403', ['type_menu' => 'error']);
    });
    Route::get('/error-404', function () {
        return view('stisla.pages.error-404', ['type_menu' => 'error']);
    });
    Route::get('/error-500', function () {
        return view('stisla.pages.error-500', ['type_menu' => 'error']);
    });
    Route::get('/error-503', function () {
        return view('stisla.pages.error-503', ['type_menu' => 'error']);
    });

    // features
    Route::get('/features-activities', function () {
        return view('stisla.pages.features-activities', ['type_menu' => 'features']);
    });
    Route::get('/features-post-create', function () {
        return view('stisla.pages.features-post-create', ['type_menu' => 'features']);
    });
    Route::get('/features-post', function () {
        return view('stisla.pages.features-post', ['type_menu' => 'features']);
    });
    Route::get('/features-profile', function () {
        return view('stisla.pages.features-profile', ['type_menu' => 'features']);
    });
    Route::get('/features-settings', function () {
        return view('stisla.pages.features-settings', ['type_menu' => 'features']);
    });
    Route::get('/features-setting-detail', function () {
        return view('stisla.pages.features-setting-detail', ['type_menu' => 'features']);
    });
    Route::get('/features-tickets', function () {
        return view('stisla.pages.features-tickets', ['type_menu' => 'features']);
    });

    // utilities
    Route::get('/utilities-contact', function () {
        return view('stisla.pages.utilities-contact', ['type_menu' => 'utilities']);
    });
    Route::get('/utilities-invoice', function () {
        return view('stisla.pages.utilities-invoice', ['type_menu' => 'utilities']);
    });
    Route::get('/utilities-subscribe', function () {
        return view('stisla.pages.utilities-subscribe', ['type_menu' => 'utilities']);
    });

    // credits
    Route::get('/credits', function () {
        return view('stisla.pages.credits', ['type_menu' => '']);
    });
});
