<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index()
    {
        // $user = new User();
        // if($user->hasRole($role)){
        //     return view();
        // }
        return view('pages.admin.admin-page');
    }
}
