<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $redirectTo = '/admin';
    protected $guard = 'admin';
    protected $loginView = 'admin.auth.login';
    protected $registerView = 'admin.auth.register';

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|max:30',
            'email' => 'required|email|max:30|unique:admins',
            'password' => 'required|confirmed|max:30',
        ]);
    }


    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

    }


    public  function  showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function getRegister()
    {
        return view('admin.auth.register');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

}
