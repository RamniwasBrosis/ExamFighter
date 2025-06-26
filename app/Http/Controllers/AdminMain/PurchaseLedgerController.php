<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseLedgerController extends Controller
{
    public function first(){
        return view('admin-main.admin.purchaseLedger.first');
    }

    public function index(){
        return view('admin-main.admin.purchaseLedger.index');
    }

    public function create(){
        return view('admin-main.admin.purchaseLedger.create');
    }

    public function edit(){
        return view('admin-main.admin.purchaseLedger.edit');
    }
}
