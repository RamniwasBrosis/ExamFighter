<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseTDSReportController extends Controller
{
    public function first(){
        return view('admin-main.admin.purchaseTDSReport.first');
    }

    public function index(){
        return view('admin-main.admin.purchaseTDSReport.index');
    }

    public function create(){
        return view('admin-main.admin.purchaseTDSReport.create');
    }

    public function edit(){
        return view('admin-main.admin.purchaseTDSReport.edit');
    }
}
