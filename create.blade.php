{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'Myプロフィールの登録'を埋め込む --}}
@section('title', 'Myプロフィールの登録')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">氏名(name)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('profile') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-md-2" for="title">性別</label>
                       <select name="gender">
                         @if(old('gender')=='男性')
                        <option value="男性" selected="selected">男性</option>
                        <option value="女性">女性</option>
                        @else
                        <option value="男性">男性</option>
                        <option value="女性" selected="selected">女性</option>
                        @endif
                      </select>
                     </div>

                    <div class="form-group row">
                        <label class="col-md-2" for="title">趣味(hoby)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('hoby') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">自己紹介(introduction)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>

                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection
