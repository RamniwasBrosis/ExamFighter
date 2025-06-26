<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('admin-main.admin.users.index');
    }

    public function create() {
        return view('admin-main.admin.users.create');
    }
}
