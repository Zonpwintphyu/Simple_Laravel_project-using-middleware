<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
    public function home(){
        return 'this is home page';
    }

    public function about(){
        return 'this is about page';
    }

    public function service(){
        return 'this is service page';
    }
}
