<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AirImportController extends Controller
{
    public function index(){
        return view('admin-main.admin.airImport.index');
    }

    public function create(){
        return view('admin-main.admin.airImport.create');
    }

    public function edit(){
        return view('admin-main.admin.airImport.edit');
    }
}
