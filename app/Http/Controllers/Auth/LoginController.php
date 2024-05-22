<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
       
        // TODO: DBでユーザー認証処理を行う
    }

    // 修正: publicキーワードを削除
    function getUserByEmail($email)
    {
        return DB::table('users')->where('email', $email)->first();
    }
}

$user = User::getUserByEmail($email); 
if ($user && password_verify($password, $user->password)) {
    // ログイン成功の処理
} else {
    // ログイン失敗の処理  
}





