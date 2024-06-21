<?php

use Illuminate\Support\Facades\Route;
use VendorName\PackageName\Http\Controllers\PackageController;

Route::get('/about-package', [PackageController::class, 'about']);
