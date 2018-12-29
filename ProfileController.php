<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function edit()
    {
      return view('admin.profile.edit');
    }
    public function update()
    {
      return redirect('admin/profile/edit');
    }
}

//課題4

// 【応用】 前章でAdmin/ProfileControllerを作成し、edit Actionを追加しました。 web.phpを編集してadmin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください。

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
  Route::get('news/create','Admin\NewsController@add');
  Route::get('admin/profile/edit','Admin\ProfileController@edit Action')
});
