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
use App\Http\Controllers\Frontened\LoginController;
use App\Http\Controllers\Frontened\MailSuccessController;
use App\Http\Controllers\Frontened\ProductDetailsController;
use App\Http\Controllers\Frontened\ProductGridController;
use App\Http\Controllers\Frontened\ProductListController;
use App\Http\Controllers\Frontened\RegisterController;


//Authentication

use App\Http\Controllers\Backend\AuthController;


//Backend routes

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
Route::get('/signin',[LoginController::class,'index']);
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
Route::get('/ProductGrid',[ProductGridController::class,'index']);
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
Route::get('/auth-forgot-password', [AuthForgotPasswordController::class, 'index']);
Route::get('/auth-login', [AuthLoginController::class, 'index']);
Route::get('/auth-register', [AuthRegisterController::class, 'index']);
Route::get('/auth-reset', [AuthResetController::class, 'index']);
Route::get('/bank', [BankController::class, 'index']);

Route::get('/bootstrap-alert', [BootstrapAlertController::class, 'index']);
Route::get('/bootstrap-badge', [BootstrapBadgeController::class, 'index']);
Route::get('/bootstrap-breadcrumb', [BootstrapBreadcrumbController::class, 'index']);
Route::get('/bootstrap-button', [BootstrapButtonController::class, 'index']);
Route::get('/bootstrap-card', [BootstrapCardController::class, 'index']);
Route::get('/bootstrap-carousel', [BootstrapCarouselController::class, 'index']);
Route::get('/bootstrap-collapse', [BootstrapCollapseController::class, 'index']);
Route::get('/bootstrap-dropdown', [BootstrapDropdownController::class, 'index']);
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
Route::get('/bootstrap-spinner', [BootstrapSpinnerController::class, 'index']);
Route::get('/bootstrap-tab', [BootstrapTabController::class, 'index']);
Route::get('/bootstrap-toast', [BootstrapToastController::class, 'index']);
Route::get('/bootstrap-tooltip', [BootstrapTooltipController::class, 'index']);

Route::get('/components-alert', [ComponentsAlertController::class, 'index']);
Route::get('/components-avatar', [ComponentsAvatarController::class, 'index']);
Route::get('/components-badge', [ComponentsBadgeController::class, 'index']);
Route::get('/components-breadcrumb', [ComponentsBreadcrumbController::class, 'index']);
Route::get('/components-buttons', [ComponentsButtonsController::class, 'index']);
Route::get('/components-cards', [ComponentsCardsController::class, 'index']);
Route::get('/components-carousel', [ComponentsCarouselController::class, 'index']);
Route::get('/components-collapse', [ComponentsCollapseController::class, 'index']);
Route::get('/components-dropdown', [ComponentsDropdownController::class, 'index']);
Route::get('/components-list-group', [ComponentsListGroupController::class, 'index']);
Route::get('/components-media-object', [ComponentsMediaObjectController::class, 'index']);
Route::get('/components-modal', [ComponentsModalController::class, 'index']);
Route::get('/components-multiple-upload', [ComponentsMultipleUploadController::class, 'index']);
Route::get('/components-pagination', [ComponentsPaginationController::class, 'index']);
Route::get('/components-popover', [ComponentsPopoverController::class, 'index']);
Route::get('/components-progress', [ComponentsProgressController::class, 'index']);
Route::get('/components-spinner', [ComponentsSpinnerController::class, 'index']);
Route::get('/components-tab', [ComponentsTabController::class, 'index']);
Route::get('/components-toast', [ComponentsToastController::class, 'index']);
Route::get('/components-tooltip', [ComponentsTooltipController::class, 'index']);

Route::get('/error-503', [Error503Controller::class, 'index']);
Route::get('/error-maintenance', [ErrorMaintenanceController::class, 'index']);
Route::get('/error-not-found', [ErrorNotFoundController::class, 'index']);

Route::get('/feature-faq', [FeatureFAQController::class, 'index']);
Route::get('/feature-post-create', [FeaturePostCreateController::class, 'index']);
Route::get('/feature-post-detail', [FeaturePostDetailController::class, 'index']);
Route::get('/feature-post-edit', [FeaturePostEditController::class, 'index']);
Route::get('/feature-setting-detail', [FeatureSettingDetailController::class, 'index']);
Route::get('/feature-setting-general', [FeatureSettingGeneralController::class, 'index']);
Route::get('/feature-ticket', [FeatureTicketController::class, 'index']);

Route::get('/form-advanced-form', [FormAdvancedFormController::class, 'index']);
Route::get('/form-editor', [FormEditorController::class, 'index']);
Route::get('/form-validation', [FormValidationController::class, 'index']);

Route::get('/gmaps-advance-route', [GmapsAdvanceRouteController::class, 'index']);
Route::get('/gmaps-draggable-marker', [GmapsDraggableMarkerController::class, 'index']);
Route::get('/gmaps-geo-json', [GmapsGeoJsonController::class, 'index']);
Route::get('/gmaps-geolocation', [GmapsGeolocationController::class, 'index']);
Route::get('/gmaps-marker-cluster', [GmapsMarkerClusterController::class, 'index']);
Route::get('/gmaps-multiple-marker', [GmapsMultipleMarkerController::class, 'index']);
Route::get('/gmaps-simple', [GmapsSimpleController::class, 'index']);

Route::get('/', [IndexController::class, 'index']);
Route::get('/layout-default', [LayoutDefaultController::class, 'index']);
Route::get('/layout-top-navigation', [LayoutTopNavigationController::class, 'index']);
Route::get('/layout-transparent', [LayoutTransparentController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/module-basic-and-modal', [ModuleBasicAndModalController::class, 'index']);
Route::get('/module-chart-js', [ModuleChartJsController::class, 'index']);
Route::get('/module-datatables', [ModuleDatatablesController::class, 'index']);
Route::get('/module-full-calendar', [ModuleFullCalendarController::class, 'index']);
Route::get('/module-owl-carousel', [ModuleOwlCarouselController::class, 'index']);
Route::get('/module-sweet-alert', [ModuleSweetAlertController::class, 'index']);
Route::get('/module-toastr', [ModuleToastrController::class, 'index']);
Route::get('/module-vector-map', [ModuleVectorMapController::class, 'index']);
Route::get('/modules-weather-icon', [ModulesWeatherIconController::class, 'index']);

Route::get('/registration', [RegistrationController::class, 'index']);

Route::get('/utilities-contact', [UtilitiesContactController::class, 'index']);
Route::get('/utilities-invoice', [UtilitiesInvoiceController::class, 'index']);
Route::get('/utilities-subscribe', [UtilitiesSubscribeController::class, 'index']);
