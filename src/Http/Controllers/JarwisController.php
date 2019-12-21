<?php

namespace Jarwis\Http\Controllers;

use App\Http\Controllers\Controller as ControllersController;

class JarwisController extends ControllersController {
    public function index() {
        return view('jarwisview::index');
        /* return 'Index of JarwisController'; */
    }
    
    public function weather() {
        return view('jarwisview::weather');
        return 'Average temperature in ahmedabad is ~18C';
    }
}
