<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index(){
        return view('admin-main.admin.bank.index');
    }

    public function create(){
        return view('admin-main.admin.bank.create');
    }

    public function edit(){
        return view('admin-main.admin.bank.edit');
    }
}
