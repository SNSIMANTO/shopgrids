<?php
   //frontened
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontened\AboutUsController;
use App\Http\Controllers\Frontened\BlogGridSidebarController;
use App\Http\Controllers\Frontened\BlogSingleController;
use App\Http\Controllers\Frontened\BlogSingleSidebarController;
use App\Http\Controllers\Frontened\CartController;
use App\Http\Controllers\Frontened\CheckoutController;
use App\Http\Controllers\Frontened\ContactASController;
use App\Http\Controllers\Frontened\FaqController;
use App\Http\Controllers\Frontened\FourZeroFourController;
use App\Http\Controllers\Frontened\HomeController;
use App\Http\Controllers\Frontened\LoginController as ForntendLoginController;
use App\Http\Controllers\Frontened\MailSuccessController;
use App\Http\Controllers\Frontened\ProductDetailsController;
use App\Http\Controllers\Frontened\ProductGridController;
use App\Http\Controllers\Frontened\ProductListController;
use App\Http\Controllers\Frontened\RegisterController;


//Authentication

use App\Http\Controllers\Backend\AuthController;


//Backend routes
use App\Http\Controllers\Backend\AuthForgetPasswordController;
use App\Http\Controllers\Backend\AuthLoginController;
use App\Http\Controllers\Backend\AuthRegisterController;
use App\Http\Controllers\Backend\AuthResetController;
use App\Http\Controllers\Backend\BlankController;

use App\Http\Controllers\Backend\BootstrapAlertController;
use App\Http\Controllers\Backend\BootstrapBadgeController;
use App\Http\Controllers\Backend\BootstrapBreadcrumbController;
use App\Http\Controllers\Backend\BootstrapButtonsController;
use App\Http\Controllers\Backend\BootstrapCardController;
use App\Http\Controllers\Backend\BootstrapCarouselController;
use App\Http\Controllers\Backend\BootstrapCollapseController;
use App\Http\Controllers\Backend\BootstrapDropdownController;
use App\Http\Controllers\Backend\BootstrapGridController;
use App\Http\Controllers\Backend\BootstrapImageController;
use App\Http\Controllers\Backend\BootstrapListGroupController;
use App\Http\Controllers\Backend\BootstrapMediaObjectController;
use App\Http\Controllers\Backend\BootstrapModalController;
use App\Http\Controllers\Backend\BootstrapNavController;
use App\Http\Controllers\Backend\BootstrapNavbarController;
use App\Http\Controllers\Backend\BootstrapPaginationController;
use App\Http\Controllers\Backend\BootstrapPopoverController;
use App\Http\Controllers\Backend\BootstrapProgressController;
use App\Http\Controllers\Backend\BootstrapTableController;
use App\Http\Controllers\Backend\BootstrapTypographyController;
use App\Http\Controllers\Backend\BootstrapTooltipController;
use App\Http\Controllers\Backend\BootstrapformController;

use App\Http\Controllers\Backend\ComponentsArticleController;
use App\Http\Controllers\Backend\ComponentsChatBoxController;
use App\Http\Controllers\Backend\ComponentsAvatarController;
use App\Http\Controllers\Backend\ComponentsEmptyStateBoxController;
use App\Http\Controllers\Backend\ComponentsGalleryStateBoxController;
use App\Http\Controllers\Backend\ComponentsHeroBoxController;
use App\Http\Controllers\Backend\ComponentsMultipleUploadBoxController;
use App\Http\Controllers\Backend\ComponentsPricingController;
use App\Http\Controllers\Backend\ComponentsStatisticController;
use App\Http\Controllers\Backend\ComponentsTabController;
use App\Http\Controllers\Backend\ComponentsTableController;
use App\Http\Controllers\Backend\ComponentsUserController;
use App\Http\Controllers\Backend\ComponentsWizardController;

use App\Http\Controllers\Backend\CreditsController;

use App\Http\Controllers\Backend\Error503Controller;
use App\Http\Controllers\Backend\ErrorFiveZeroZeroController;
use App\Http\Controllers\Backend\ErrorFourZeroFourController;
use App\Http\Controllers\Backend\ErrorFourZeroThreeController;


use App\Http\Controllers\Backend\FeaturesActivitiesController;
use App\Http\Controllers\Backend\FeaturesPostCreateController;
use App\Http\Controllers\Backend\FeaturesPostsController;
use App\Http\Controllers\Backend\FeaturesSettingDetailController;
use App\Http\Controllers\Backend\FeaturesTicketController;
use App\Http\Controllers\Backend\FeaturesProfileController;
use App\Http\Controllers\Backend\FeaturesSettingsController;

use App\Http\Controllers\Backend\FormsAdvancedFormController;
use App\Http\Controllers\Backend\FormsEditorController;
use App\Http\Controllers\Backend\FormsValidationController;


use App\Http\Controllers\Backend\GmapsAdvancedRouteController;
use App\Http\Controllers\Backend\GmapsDraggableMarkerController;
use App\Http\Controllers\Backend\GmapsGeocodingController;
use App\Http\Controllers\Backend\GmapsGeolocationController;
use App\Http\Controllers\Backend\GmapsMarkerController;
use App\Http\Controllers\Backend\GmapsMultipleMarkerController;
use App\Http\Controllers\Backend\GmapsRouteController;
use App\Http\Controllers\Backend\GmapsSimpleController;

use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Backend\IndexZeroController;
use App\Http\Controllers\Backend\LayoutDefaultController;
use App\Http\Controllers\Backend\LayoutTopNavigationController;
use App\Http\Controllers\Backend\LayoutTransparentController;

use App\Http\Controllers\Backend\LogInController;


use App\Http\Controllers\Backend\ModulesCalendarController;
use App\Http\Controllers\Backend\ModuleBasicAndModalController;
use App\Http\Controllers\Backend\ModulesChartJsController;
use App\Http\Controllers\Backend\ModulesDataTablesController;
use App\Http\Controllers\Backend\ModulesFlagController;
use App\Http\Controllers\Backend\ModulesFontAwesomeController;
use App\Http\Controllers\Backend\ModulesIonIconsController;
use App\Http\Controllers\Backend\ModulesOwlCarouselController;
use App\Http\Controllers\Backend\ModulesSparklineController;
use App\Http\Controllers\Backend\ModulesSweetAlertController;
use App\Http\Controllers\Backend\ModulesToastrController;
use App\Http\Controllers\Backend\ModulesVectorMapController;
use App\Http\Controllers\Backend\ModulesWeatherIconController;

use App\Http\Controllers\Backend\RegistrationController;

use App\Http\Controllers\Backend\UtilitiesContactController;
use App\Http\Controllers\Backend\UtilitiesInvoiceController;
use App\Http\Controllers\Backend\UtilitiesSubscribeController;


//use App\Http\Controllers\Backend\;



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


//frontend

Route::get('/',[HomeController::class,'index']);
Route::get('/signin',[ForntendLoginController::class,'index']);
Route::get('/aboutus',[AboutUsController::class,'index']);
Route::get('/blog-grid-sidebar',[BlogGridSidebarController::class,'index']);
Route::get('/blog-single',[BlogSingleController::class,'index']);
Route::get('/blog-single-sidebar',[BlogSingleSidebarController::class,'index']);
Route::get('/ViewCart',[CartController::class,'index']);        //cart.html
Route::get('/checkout',[CheckoutController::class,'index']);

Route::get('/contact',[ContactASController::class,'index']);
Route::get('/Faq',[FaqController::class,'index']);
Route::get('/FourZeroFour',[FourZeroFourController::class,'index']);

Route::get('/mailsuccess',[MailSuccessController::class,'index']);
Route::get('/product-details',[ProductDetailsController::class,'index']);
Route::get('/product-grids',[ProductGridController::class,'index']);
Route::get('/ProductList',[ProductListController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);
Route::get('/password-recovery',[PasswordController::class,'index']);

//Authentication routes
Route::get('login', [AuthController::class, 'index'])->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('registration', [AuthController::class, 'registration'])->name('register');

Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

Route::get('dashboard', [AuthController::class, 'dashboard']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');


//backend Routes

Route::get('/auth-forgot-password', [AuthForgetPasswordController::class, 'index']);
Route::get('/auth-login', [AuthLoginController::class, 'index']);
Route::get('/auth-register', [AuthRegisterController::class, 'index']);
Route::get('/auth-reset', [AuthResetController::class, 'index']);
Route::get('/blank', [BlankController::class, 'index']);

Route::get('/bootstrap-alert', [BootstrapAlertController::class, 'index']);
Route::get('/bootstrap-badge', [BootstrapBadgeController::class, 'index']);
Route::get('/bootstrap-breadcrumb', [BootstrapBreadcrumbController::class, 'index']);
Route::get('/bootstrap-button', [BootstrapButtonsController::class, 'index']);
Route::get('/bootstrap-card', [BootstrapCardController::class, 'index']);
Route::get('/bootstrap-carousel', [BootstrapCarouselController::class, 'index']);
Route::get('/bootstrap-collapse', [BootstrapCollapseController::class, 'index']);
Route::get('/bootstrap-dropdown', [BootstrapDropdownController::class, 'index']);
Route::get('/bootstrap-form', [BootstrapformController::class, 'index']);
Route::get('/bootstrap-grid', [BootstrapGridController::class, 'index']);
Route::get('/bootstrap-image', [BootstrapImageController::class, 'index']);
Route::get('/bootstrap-list-group', [BootstrapListGroupController::class, 'index']);
Route::get('/bootstrap-media-object', [BootstrapMediaObjectController::class, 'index']);
Route::get('/bootstrap-modal', [BootstrapModalController::class, 'index']);
Route::get('/bootstrap-nav', [BootstrapNavController::class, 'index']);
Route::get('/bootstrap-navbar', [BootstrapNavbarController::class, 'index']);
Route::get('/bootstrap-pagination', [BootstrapPaginationController::class, 'index']);
Route::get('/bootstrap-popover', [BootstrapPopoverController::class, 'index']);
Route::get('/bootstrap-progress', [BootstrapProgressController::class, 'index']);
Route::get('/bootstrap-table', [BootstrapTableController::class, 'index']);
Route::get('/bootstrap-typography', [BootstrapTypographyController::class, 'index']);
Route::get('/bootstrap-tooltip', [BootstrapTooltipController::class, 'index']);


Route::get('/components-article', [ComponentsArticleController::class, 'index']);
Route::get('/components-chat-box', [ComponentsChatBoxController::class, 'index']);
Route::get('/components-avatar', [ComponentsAvatarController::class, 'index']);
Route::get('/components-empty-state', [ComponentsEmptyStateBoxController::class, 'index']);
Route::get('/components-gallery', [ComponentsGalleryStateBoxController::class, 'index']);
Route::get('/components-hero', [ComponentsHeroBoxController::class, 'index']);
Route::get('/components-multiple-upload', [ComponentsMultipleUploadBoxController::class, 'index']);
Route::get('/components-pricing', [ComponentsPricingController::class, 'index']);
Route::get('/components-statistic', [ComponentsStatisticController::class, 'index']);
Route::get('/components-tab', [ComponentsTabController::class, 'index']);
Route::get('/components-table', [ComponentsTableController::class, 'index']);
Route::get('/components-user', [ComponentsUserController::class, 'index']);
Route::get('/components-wizerd', [ComponentsWizardController::class, 'index']);

Route::get('/credits', [CreditsController::class, 'index']);


Route::get('/error-503', [Error503Controller::class, 'index']);
Route::get('/error-500', [ErrorFiveZeroZeroController::class, 'index']);
Route::get('/error-404', [ErrorFourZeroFourController::class, 'index']);
Route::get('/error-403', [ErrorFourZeroThreeController::class, 'index']);


Route::get('/features-activities', [FeaturesActivitiesController::class, 'index']);
Route::get('/features-post-create', [FeaturesPostCreateController::class, 'index']);
Route::get('/features-post', [FeaturesPostsController::class, 'index']);
Route::get('/features-profile', [FeaturesProfileController::class, 'index']);
Route::get('/features-settings', [FeaturesSettingsController::class, 'index']);
Route::get('/features-setting-detail', [FeaturesSettingDetailController::class, 'index']);
Route::get('/features-ticket', [FeaturesTicketController::class, 'index']);


Route::get('/form-advanced-form', [FormsAdvancedFormController::class, 'index']);
Route::get('/form-editor', [FormsEditorController::class, 'index']);
Route::get('/form-validation', [FormsValidationController::class, 'index']);

Route::get('/gmaps-advance-route', [GmapsAdvancedRouteController::class, 'index']);
Route::get('/gmaps-draggable-marker', [GmapsDraggableMarkerController::class, 'index']);
Route::get('/gmaps-geo-coding', [GmapsGeocodingController::class, 'index']);
Route::get('/gmaps-geolocation', [GmapsGeolocationController::class, 'index']);
Route::get('/gmaps-marker', [GmapsMarkerController::class, 'index']);
Route::get('/gmaps-multiple-marker', [GmapsMultipleMarkerController::class, 'index']);
Route::get('/gmaps-route', [GmapsRouteController::class, 'index']);
Route::get('/gmaps-simple', [GmapsSimpleController::class, 'index']);

Route::get('/index', [IndexController::class, 'index']);
Route::get('/index/zero', [IndexZeroController::class, 'index']);
Route::get('/layout-default', [LayoutDefaultController::class, 'index']);
Route::get('/layout-top-navigation', [LayoutTopNavigationController::class, 'index']);
Route::get('/layout-transparent', [LayoutTransparentController::class, 'index']);

// Route::get('/login', [LoginController::class, 'index']);

Route::get('/modules-calendar', [ModulesCalendarController::class, 'index']);
Route::get('/modules-chart-js', [ModulesChartJsController::class, 'index']);
Route::get('/modules-datatable', [ModulesDataTablesController::class, 'index']);
Route::get('/modules-flag', [ModulesFlagController::class, 'index']);
Route::get('/modules-font', [ModulesFontAwesomeController::class, 'index']);
Route::get('/modules-ion-icon', [ModulesIonIconsController::class, 'index']);
Route::get('/modules-owl-carousel', [ModulesOwlCarouselController::class, 'index']);
Route::get('/modules-sparkline', [ModulesSparklineController::class, 'index']);
Route::get('/modules-sweet-alert', [ModulesSweetAlertController::class, 'index']);
Route::get('/modules-toastr', [ModulesToastrController::class, 'index']);
Route::get('/modules-vector-map', [ModulesVectorMapController::class, 'index']);
Route::get('/modules-weather-icon', [ModulesWeatherIconController::class, 'index']);

// Route::get('/registration', [RegistrationController::class, 'index']);

Route::get('/utilities-contact', [UtilitiesContactController::class, 'index']);
Route::get('/utilities-invoice', [UtilitiesInvoiceController::class, 'index']);
Route::get('/utilities-subscribe', [UtilitiesSubscribeController::class, 'index']);
