<?php

use App\Http\Controllers\{
    HomeController,
    AboutController,
    WareHousingController,
    SupplyChainController,
    PackagingOptionsController,
    ConsultingController,
    OverlandTransportationController,
    AirFreightController,
    OceanFreightController,
    RailTransportationController,
    ContractLogisticsController,
    BecomeDriverController,
    ContactController
};

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/index', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/ware-housing', [WareHousingController::class, 'index'])->name('ware-housing');
Route::get('/supply-chain-management', [SupplyChainController::class, 'index'])->name('supply-chain-management');
Route::get('/packing-options', [PackagingOptionsController::class, 'index'])->name('packaging-options');
Route::get('/consulting-services', [ConsultingController::class, 'index'])->name('consulting-services');
Route::get('/overland-transportation', [OverlandTransportationController::class, 'index'])->name('overland-transportation');
Route::get('/air-freight', [AirFreightController::class, 'index'])->name('air-freight');
Route::get('/ocean-freight', [OceanFreightController::class, 'index'])->name('ocean-freight');
Route::get('/rail-transportation', [RailTransportationController::class, 'index'])->name('rail-transportation');
Route::get('/contract-logistics', [ContractLogisticsController::class, 'index'])->name('contract-logistics');
Route::get('/become-a-driver', [BecomeDriverController::class, 'index'])->name('become-a-driver');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.form.submit');
