<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberUsersController extends Controller
{
    public function index(){
        return view('admin-main.admin.users.index');
    }

    public function create(){
        return view('admin-main.admin.users.create');
    }

    public function edit(){
        return view('admin-main.admin.users.edit');
    }
}
