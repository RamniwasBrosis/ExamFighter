<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersUserRoleController extends Controller
{
    public function index(){
        return view('admin-main.admin.userrole.index');
    }

    public function create(){
        return view('admin-main.admin.userrole.create');
    }

    public function edit(){
        return view('admin-main.admin.userrole.edit');
    }
}
