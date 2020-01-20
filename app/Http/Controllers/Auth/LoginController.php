<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = '/admin/admin';
    public function redirectTo(){
        $user = Auth::user()->role;
        switch ($user) {
            case 'Admin':
                    return 'admin/admin';
                break;
            // case 'Fundriser':
            //         return 'fundriser/dashboard-fundriser';
            //     break;
            // case 'Akuntansi':
            //         return 'akuntansi/dashboard-akuntansi';
            //     break;
            // case 'User':
            //         return '/';
            //     break;
            default:
                    return '/';
            break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
