<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/**
 * @group User Authentication
 *
 * APIs for user auth
 */
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

    protected function attemptLogin(Request $request) {

        $identity = $request->get("username");
        $password = $request->get("password");
    
        return \Auth::attempt([
            filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username' => $identity,
            'password' => $password
        ]);
    }

    /**
     * User Login
     * 
     * @bodyParam username string required The username or email of the user.
     * @bodyParam password string required The password of the user.
     * @response {
     *  "success":true,
     * "data":{
     *      "id":1,
     *      "name":"administrator",
     *      "email":"serg.casquejo@gmail.com",
     *      "email_verified_at":null,
     *      "created_at":"2019-02-04 11:59:31",
     *      "updated_at":"2019-02-04 12:46:55",
     *      "api_token":"vpvisH4gOBN5zLu4xz1gVoPZQHMpJKc9Va8mY2MQcNQZ7wR1iMGWQDFtD5jx",
     *      "role_id":1
     *  }
     * }
     * @response {
     *  "success":false,
     *  "data":"User doesn`t exists."
     * }
     */
    public function login(Request $request)
    {
        
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            $user = $this->guard()->user();
            $user->generateToken();

            return response()->json([
                'success' => true,
                'data' => $user->toArray(),
            ]);
        }
        return response()->json(['success' => false, 'data' => 'User doesn`t exists.'], 200);
    }
    
   

    /**
     * User logout
     * 
     * @response {
     *  "success":true,
     *  "data":"User logged out."
     * }
     */

    public function logout(Request $request)
    {
        $user = \Auth::guard('api')->user();

        if ($user) {
            $user->api_token = null;
            $user->save();
        }

        return response()->json(['success' => true, 'data' => 'User logged out.'], 200);
    }


    private function validateLogin(Request $request) {
        if (empty($request->username) && empty($request->password)) {
            return response()->json(['success' => false, 'data' => 'Username and password is required'], 200);
        } elseif (empty($request->username)) {
            return response()->json(['success' => false, 'data' => 'Username is required'], 200);
        }elseif (empty($request->password)) {
            return response()->json(['success' => false, 'data' => 'Password is required'], 200);
        }
    }
}
