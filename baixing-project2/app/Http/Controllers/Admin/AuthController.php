<?php

namespace App\Http\Controllers\Admin;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Admin;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/admin';
    protected $redirectPath='admin.dashboard';
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
            'password' => 'required|confirmed|min:6',
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

    /**
     * 处理登录认证
     *
     * @return Response
     */
    public function adminLogin(Request $request){
        if(count($request) > 0){
            $auth = auth()->guard('admin');

            $credentials = [
                'email' =>  $request['email'],
                'password' =>  $request['password'],
            ];


            if ($auth->attempt($credentials)) {
                return redirect()->action('AdminController@index');
            } else {
                echo 'admin login Error';
            }
        } else {
            return view('admin.login');
        }
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
