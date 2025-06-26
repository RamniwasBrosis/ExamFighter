<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeaImportController extends Controller
{
    public function index(){
        return view('admin-main.admin.seaImport.index');
    }

    public function create(){
        return view('admin-main.admin.seaImport.create');
    }

    public function edit(){
        return view('admin-main.admin.seaImport.edit');
    }
}
