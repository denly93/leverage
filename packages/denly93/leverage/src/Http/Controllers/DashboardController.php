<?php

namespace Denly93\Leverage\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        return view('admin::index');
    }
}
