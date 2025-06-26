<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function index(){
        return view('admin-main.admin.voyage.index');
    }

    public function create(){
        return view('admin-main.admin.voyage.create');
    }

    public function edit(){
        return view('admin-main.admin.voyage.edit');
    }
}
