<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct() {
        return $this->middleware('guest',['except'=>'destory']);

    }
   public function destory() {
       auth()->logout();

       return redirect('bbs')->with('message','다음에 또 방문해주세요.');
    //bbs은 인정된 사용자만 사용이가능 아니면 session.create로 이동한다.
    // bbs가기전에 auth라는 것이 체크를 한다.
    // redirect어저구 aauthentices 에 설정되어 있다.

    }

    public function create() {
        return view(session.create);
    }

}
