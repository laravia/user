<?php

namespace Laravia\User\App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('laravia.user::dashboardIndex');
    }

    public function home(){
        return view('laravia.user::dashboardHome');
    }

}
