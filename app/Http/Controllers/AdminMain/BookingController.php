<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        return view('admin-main.admin.booking.index');
    }

    public function create(){
        return view('admin-main.admin.booking.create');
    }

    public function edit(){
        return view('admin-main.admin.booking.edit');
    }
}
