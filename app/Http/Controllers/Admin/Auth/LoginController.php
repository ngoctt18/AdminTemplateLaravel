<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Admin\LoginAdminRequest;
use Illuminate\Http\Request;
use Auth;
use Session;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:writer')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('admin.admin_login', ['url' => 'admin']);
    }

    public function adminLogin(LoginAdminRequest $request)
    {
        $loginInfo = [
            'phone' => $request->phone, 
            'password' => $request->password
        ];
        // dd($loginInfo);
        if (Auth::guard('admin')->attempt($loginInfo, $request->input('remember', false))) {
            Session::flash('success', 'Đăng nhập thành công.');
            return redirect()->route('admin.dashboard');
        }
        // return back()->withInput($request->only('phone', 'remember'));
    }
    
    public function logout(Request $request){
        Auth::guard('admin')->logout();
        return redirect()->guest('/admin/login');
    }
}
