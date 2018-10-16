<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Admin;
class SocialLoginController extends Controller
{

    // facebook login controller
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function facebookRedirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function facebookHandleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        dd($user);
        // $user->token;
    }

    // google login controller

        /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function googleRedirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function googleHandleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        dd($user);
        // $user->token;
    }
}
