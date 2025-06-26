<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesOutstandingController extends Controller
{
    public function first(){
        return view('admin-main.admin.salesOutstanding.first');
    }

    public function index(){
        return view('admin-main.admin.salesOutstanding.index');
    }

    public function create(){
        return view('admin-main.admin.salesOutstanding.create');
    }

    public function edit(){
        return view('admin-main.admin.salesOutstanding.edit');
    }
}
