<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContainerSizeController extends Controller
{
    public function index(){
        return view('admin-main.admin.containersize.index');
    }

    public function create(){
        return view('admin-main.admin.containersize.create');
    }

    public function edit(){
        return view('admin-main.admin.containersize.edit');
    }
}
