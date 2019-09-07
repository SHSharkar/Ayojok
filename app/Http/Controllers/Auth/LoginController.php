<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\google_login_setup\googleLoginApi;


use App\User;

use Illuminate\Support\Facades\Auth;
use PHPUnit\Exception;


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

    //protected $redirectTo = '/';


    /**
     * @var string
     */
    public function __construct()
    {
        $this->redirectTo = url()->previous();
        $this->middleware('guest')->except('logout');
    }

    /**
     * @param $service
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider_all($service): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        //$this->check = $loginid;
        //dd($service);
        return Socialite::driver($service)->redirect();
    }

    /**
     * @param $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleProviderCallback_all($service)
    {
        //dd($service);
        $user = Socialite::driver($service)->stateless()->user();

        //dd($user) ;
        $access_token = $user->token;
        if ($user->name != '') {
            $name = $user->name;
        } else {
            $name = explode('@', $user->email)[0];
        }

        //return $name;
        $email = $user->email;
        $pass = $user->id;
        if ($this->isRegistered($email)) {

            $user_array = [];
            $user_array['email'] = $email;
            $user_array['password'] = $pass;

            //echo "this email is registered.";
            //return $user_array;
            /*For Login */
            if (Auth::attempt($user_array)) {
                return Redirect::to('/');
            }

            return Redirect::to('/')->with("reg_msg", "1");
        }

        $full_name = $name;
        $first_name = '';
        $last_name = '';

        $name_array = explode(' ', $full_name);
        $count = count($name_array);

        for ($i = 0; $i < $count - 1; $i++) {
            $first_name = $first_name.' '.$name_array[$i];
        }
        $last_name = $name_array[$i];

        if ($first_name == null) {
            $first_name = 'Not set';
        } elseif ($last_name == null) {
            $last_name = "Not set";
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'fname' => $first_name,
            'lname' => $last_name,
            'password' => Hash::make($pass),
        ]);

        /*For Registration and login */

        $user_array = [];
        $user_array['email'] = $email;
        $user_array['password'] = $pass;

        //return $user_array;

        if (Auth::attempt($user_array)) {
            return Redirect::to('/');
        }

        echo 'Register but pass incorrect';
    }


    //edited by frank
    public function googleAuth()
    {
        include(app_path().'\Http\Controllers\Auth\google_login_setup\settings.php');
        if (isset($_GET['code'])) {
            try {
                $gapi = new GoogleLoginApi();

                // Get the access token
                $data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);

                // Get user information
                $user_info = $gapi->GetUserProfileInfo($data['access_token']);
                print_r($user_info);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }
        }
    }

    /**
     * @param $mail
     *
     * @return bool
     */
    public function isRegistered($mail): bool
    {
        $user = User::whereEmail($mail)->first();

        if ($user) {
            return true;
        }

        return false;
    }
}
