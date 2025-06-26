<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReceiptLedgerController extends Controller
{
    public function first(){
        return view('admin-main.admin.receiptLedger.first');
    }

    public function index(){
        return view('admin-main.admin.receiptLedger.index');
    }

    public function create(){
        return view('admin-main.admin.receiptLedger.create');
    }

    public function edit(){
        return view('admin-main.admin.receiptLedger.edit');
    }
}
