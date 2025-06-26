<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChargesController extends Controller
{
    public function index(){
        return view('admin-main.admin.charges.index');
    }

    public function create(){
        return view('admin-main.admin.charges.create');
    }

    public function edit(){
        return view('admin-main.admin.charges.edit');
    }
}
