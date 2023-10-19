<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function add()
    {
        return view('admin.news.create');
    }
    
    public function edit()
    {
        return view('admin.news.edit');
    }

    public function update()
    {
        return redirect('admin/news/edit');
    }

    public function create(Request $request)
    {
        // admin/news/createにリダイレクトする
        return redirect('admin/news/create');
    }
}