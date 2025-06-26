<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index(){
        return view('admin-main.admin.transport.index');
    }

    public function create(){
        return view('admin-main.admin.transport.create');
    }

    public function edit(){
        return view('admin-main.admin.transport.edit');
    }
}
