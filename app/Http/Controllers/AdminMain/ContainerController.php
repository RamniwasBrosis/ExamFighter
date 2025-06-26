<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    public function index(){
        return view('admin-main.admin.container.index');
    }

    public function create(){
        return view('admin-main.admin.container.create');
    }

    public function edit(){
        return view('admin-main.admin.container.edit');
    }
}
