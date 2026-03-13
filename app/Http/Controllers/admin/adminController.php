<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category; 

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin(){
        return view('admin.admin');
    }
	
}