<?php

namespace Webkul\Category\Http\Controllers;

use Webkul\Admin\Http\Controllers\Controller;

class LeadController extends Controller
{
    public function index()
    {
        return view('category::leads');
    }
}
