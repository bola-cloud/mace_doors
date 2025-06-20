<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\SitemapController;



use App\Livewire\User\HomeComponent;
use App\Livewire\User\TypeServiceComponent;
use App\Livewire\User\FreeQuoteComponent;
use App\Livewire\User\ServicesComponent;
use App\Livewire\User\ContactComponent;
use App\Livewire\User\AboutComponent;
use App\Livewire\User\BlogComponent;
use App\Livewire\User\BlogDetailComponent;


use App\Livewire\User\ServiceComponent;
use App\Livewire\User\ItemServiceCompnent;
use App\Livewire\User\SmartServicesComponent;



use App\Livewire\Admin\HomeController;
use App\Livewire\Admin\AddCategoryComponent;
use App\Livewire\Admin\AddTypeCategory;
use App\Livewire\Admin\ShowServicesCategory;
use App\Livewire\Admin\ShowTypeCategory;
use App\Livewire\Admin\EditTypeCategory;
use App\Livewire\Admin\ShowQuoteComponent;
use App\Livewire\Admin\EditServiceComponent;
use App\Livewire\Admin\AddBlogComponent;



///seo


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function () {

        Route::get('sitemap.xml',[SitemapController::class,'index']);

        Route::get('/frde',HomeController::class)->name("home_admin");
        Route::get('/frde/addcategory',AddCategoryComponent::class)->name("add_category");
        Route::get('/frde/typeadd',AddTypeCategory::class)->name("typeadd");
        Route::get('/frde/edit_type/{type_id}',EditTypeCategory::class)->name("edit_type");
        Route::get('/frde/showservicescategory',ShowServicesCategory::class)->name("show_category");
        Route::get('/frde/showstypecate/{service_id}',ShowTypeCategory::class)->name("show_type_category");
        Route::get('/frde/quotes',ShowQuoteComponent::class)->name("quotes_component");
        Route::get('frde/edit_service/{id_service}',EditServiceComponent::class)->name('edit_service');
        Route::get('/frde/addblog',AddBlogComponent::class)->name("add_blog");

        ////user
        Route::get('/',HomeComponent::class)->name('user_home');
        Route::get('services',ServicesComponent::class)->name('services');


        Route::get('typeservice/{service_id}',TypeServiceComponent::class)->name('type_service');
        Route::get('freequote', FreeQuoteComponent::class)->name('freequote');        
        Route::get('contact',ContactComponent::class)->name('contact');
        Route::get('about',AboutComponent::class)->name('about');
        Route::get('blog',BlogComponent::class)->name('blog');
        Route::get('service/{name}',ServiceComponent::class)->name('service_component');
        Route::get('service/{name}/{name_type}',ItemServiceCompnent::class)->name('type_service_component');
        Route::get('blog/{id_blog}',BlogDetailComponent::class)->name('id_blog');

        Route::get('iot-development',SmartServicesComponent::class)->name('iotservices');

    // Other routes
});
