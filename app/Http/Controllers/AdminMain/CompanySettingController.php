<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanySettingController extends Controller
{
    public function index(){
        return view('admin-main.admin.companysetting.index');
    }

    public function create(){
        return view('admin-main.admin.companysetting.create');
    }

    public function edit(){
        return view('admin-main.admin.companysetting.edit');
    }
}
