<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlTypeController extends Controller
{
    public function index(){
        return view('admin-main.admin.bltype.index');
    }

    public function create(){
        return view('admin-main.admin.bltype.create');
    }

    public function edit(){
        return view('admin-main.admin.bltype.edit');
    }
}
