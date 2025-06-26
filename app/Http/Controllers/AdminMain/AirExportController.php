<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AirExportController extends Controller
{
    public function index(){
        return view('admin-main.admin.airExport.index');
    }

    public function create(){
        return view('admin-main.admin.airExport.create');
    }

    public function edit(){
        return view('admin-main.admin.airExport.edit');
    }
}
