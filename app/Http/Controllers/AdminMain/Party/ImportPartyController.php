<?php

namespace App\Http\Controllers\AdminMain\Party;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImportPartyController extends Controller
{
    public function index(){
        return view('admin-main.admin.party.import.index');
    }

    public function create(){
        return view('admin-main.admin.party.import.create');
    }

    public function edit(){
        return view('admin-main.admin.party.import.edit');
    }
}
