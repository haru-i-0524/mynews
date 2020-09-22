@extends('layouts.profilefront')

@section('title', 'プロフィール一覧')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <label class="title col-md-2">名前</label>
                        <div class="body col-md-10">
                            <h1>{{ str_limit($headline->name, 50) }}</h1>
                        </div>
                    </div>           
                    <div class="row">
                        <label class="title col-md-2">性別</label>
                        <div class="body col-md-10">
                            <h1>{{ str_limit($headline->gender, 50) }}</h1>
                        </div>
                    </div>           
                    <div class="row">
                        <label class="title col-md-2">趣味</label>
                        <div class="body col-md-10">
                            <h1>{{ str_limit($headline->hobby, 600) }}</h1>
                        </div>
                    </div>           
                    <div class="row">
                        <label class="title col-md-2">自己紹介</label>
                        <div class="body col-md-10">
                            <h1>{{ str_limit($headline->introduction, 600) }}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <label class="date col-md-2">登録日</label>
                        <div class="date col-md-2">
                            {{ $headline->updated_at->format('Y年m月d日') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-10 mx-auto">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                        <label class="title col-md-2">名前</label>
                        <div class="body col-md-10">
                            <h1>{{ str_limit($post->name, 50) }}</h1>
                        </div>
                    </div>           
                    <div class="row">
                        <label class="title col-md-2">性別</label>
                        <div class="body col-md-10">
                            <h1>{{ str_limit($post->gender, 50) }}</h1>
                        </div>
                    </div>           
                    <div class="row">
                        <label class="title col-md-2">趣味</label>
                        <div class="body col-md-10">
                            <h1>{{ str_limit($post->hobby, 600) }}</h1>
                        </div>
                    </div>    
                    <div class="row">
                        <label class="title col-md-2">自己紹介</label>
                        <div class="body col-md-10">
                            <h1>{{ str_limit($post->introduction, 600) }}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <label class="date col-md-2">登録日</label>
                        <div class="date col-md-2">
                            {{ $post->updated_at->format('Y年m月d日') }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <hr color="#c0c0c0"> 
@endsection

