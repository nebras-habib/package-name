<?php

use Illuminate\Support\Facades\Route;
use VendorName1\PackageName\Http\Controllers\PackageController;

Route::get('/about-package', [PackageController::class, 'about']);
