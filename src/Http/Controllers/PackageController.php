<?php

namespace VendorName1\PackageName\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 *
 */
class PackageController extends Controller {

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function about(Request $request) {
        return view('PackageName::about', [
            'someValue' => config('package.some_value')
        ]);
    }

}
