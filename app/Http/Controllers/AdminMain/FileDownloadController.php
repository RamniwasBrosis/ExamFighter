<?php

namespace App\Http\Controllers\AdminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileDownloadController extends Controller
{
    public function index(){
        return view('admin-main.admin.fileDownload.index');
    }
}
