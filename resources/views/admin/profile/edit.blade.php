{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'Myプロフィール編集画面'を埋め込む --}}
@section('title', 'Myプロフィール編集画面')

{{-- profile.blae.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール編集画面</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <!-- 氏名(name) -->
                    <div class="form-group row">
                        <label class="col-md-2" for="title">名前</label>
                        
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    
                    <!-- 性別(gender) -->
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-2">    
                            <input type="radio" name="gender" value="male" {{$profile_form->gender == "male" ? 'checked' : null }}>男性
                       
                        </div>
                        
                        <div class="col-md-2">   
                            <input type="radio" name="gender" value="female" {{$profile_form->gender == "female" ? 'checked' : null }}>女性
                        
                        </div>
                    </div>
                    
                    <!-- 趣味(hobby) -->
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows='10'>{{ $profile_form->hobby }}</textarea>
                        </div>
                    </div>
                    
                    
                    <!-- 自己紹介(introduction -->
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介</label>
                        
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows='10'>{{ $profile_form->introduction }}</textarea>
                            
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

