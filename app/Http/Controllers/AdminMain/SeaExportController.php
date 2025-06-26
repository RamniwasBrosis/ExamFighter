<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeaExportController extends Controller
{
    public function index(){
        return view('admin-main.admin.seaExport.index');
    }

    public function create(){
        return view('admin-main.admin.seaExport.create');
    }

    public function edit(){
        return view('admin-main.admin.seaExport.edit');
    }
}
