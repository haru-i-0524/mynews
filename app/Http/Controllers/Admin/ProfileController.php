<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    // addを追加
    public function add()
    {
        return view('admin.profile.create');
    }
    // createを追加
    public function create()
    {
        return redirect('admin/profile/create');
    }
    // editを追加
    public function edit()
    {
        return view('admin.profile.edit');
    }
    // updateを追加
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
