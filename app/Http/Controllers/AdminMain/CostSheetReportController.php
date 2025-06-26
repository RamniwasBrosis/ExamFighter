<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CostSheetReportController extends Controller
{
    public function first(){
        return view('admin-main.admin.costSheetReport.first');
    }

    public function index(){
        return view('admin-main.admin.costSheetReport.index');
    }

    public function create(){
        return view('admin-main.admin.costSheetReport.create');
    }

    public function edit(){
        return view('admin-main.admin.costSheetReport.edit');
    }
}
