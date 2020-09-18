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
    // 課題13‐3　admin/profile/createにリダイレクトするように
    public function create(Request $request)
    {
    
        // 課題14-5
        // Varidationを行う
        $this->validate($request, Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();
        
        //フォームから送信されてきた_tokenを削除する 
        unset($form['_token']);
        
        // データベースに保存する
        $profile->fill($form);
        $profile->save();
        
        
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
