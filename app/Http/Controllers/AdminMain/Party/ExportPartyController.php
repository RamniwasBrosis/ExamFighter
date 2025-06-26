<?php

namespace App\Http\Controllers\AdminMain\Party;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExportPartyController extends Controller
{
    public function index(){
        return view('admin-main.admin.party.export.index');
    }

    public function create(){
        return view('admin-main.admin.party.export.create');
    }

    public function edit(){
        return view('admin-main.admin.party.export.edit');
    }
}
