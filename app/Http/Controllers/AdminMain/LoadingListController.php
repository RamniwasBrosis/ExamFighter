<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoadingListController extends Controller
{
    public function first(){
        return view('admin-main.admin.loadingList.first');
    }

    public function index(){
        return view('admin-main.admin.loadingList.index');
    }

    public function create(){
        return view('admin-main.admin.loadingList.create');
    }

    public function edit(){
        return view('admin-main.admin.loadingList.edit');
    }
}
