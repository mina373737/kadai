<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class ProfileController extends Controller
{


    //
    public function edit(Request $request)
    {
      //Varidationを行う
      $this->validate($request, Profile::$rules);


      $profile = new Profile;
      $profile->user_id = $request->user()->id;
      $form = $request->all();

      return redirect('admin/news/create');
    }

    public function edit(Request $request)
    {

      //Profile Modelからデータを取得する
      $profile = Profile::find($request->id);

      return view('admin.profile.edit',['profile_form=>$profile']);
    }

    public function update(Request $request)
    {
      //Validationをかける
      $this->validate($request,Profile $rules);
      //Profile Modelからデータを取得する
      $profile = Profile::find($request->id);
      //送信されてきたフォームデータを格納する
      $profile_form = $request->all();
      unset($news_form['_token']);
      //該当するデータを上書きして保存する
      $profile->fill($profile_form)->save();
      return redirect('admin/news');
    }
}



      //resouces/views/admin/profile/edit.blade.phpを返す
      return view('admin.profile.edit');
    }
    public function update()
    {
      return redirect('admin/profile/edit');
    }
}
