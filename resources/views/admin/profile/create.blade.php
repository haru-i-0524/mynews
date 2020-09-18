{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'Myプロフィール'を埋め込む --}}
@section('title', 'Myプロフィール')

{{-- profile.blae.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{
                action('Admin\ProfileController@create') }}" method="post">
                    
                   @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <!-- 氏名(name) -->
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            
                        </div>
                    </div>
                    
                    <!-- 性別(gender) -->
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        
                        <div class="col-md-2">    
                            <input type="radio" name="gender" value="male">男性
                       
                       </div>
                       <div class="col-md-2">    
                            <input type="radio" name="gender" value="female">女性
                       
                       </div>
                    </div>
                    
                    <!-- 趣味(hobby) -->
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows='10'></textarea>
                        </div>
                    </div>
                    
                    <!-- 自己紹介(introduction) -->
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介</label>
                        
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows='10'></textarea>
                            
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                    
                    
                </form>
            </div>
        </div>
    </div>
@endsection



