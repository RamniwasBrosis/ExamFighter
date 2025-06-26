<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobMasterController extends Controller
{
    public function index(){
        return view('admin-main.admin.jobMaster.index');
    }

    public function create(){
        return view('admin-main.admin.jobMaster.create');
    }

    public function edit(){
        return view('admin-main.admin.jobMaster.edit');
    }
}
