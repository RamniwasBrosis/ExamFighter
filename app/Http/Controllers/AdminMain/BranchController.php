<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(){
        return view('admin-main.admin.branch.index');
    }

    public function create(){
        return view('admin-main.admin.branch.create');
    }

    public function edit(){
        return view('admin-main.admin.branch.edit');
    }
}
