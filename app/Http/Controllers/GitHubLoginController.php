<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GitHubLoginController extends Controller
{
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
            $finduser = User::where('social_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/home');
            } else {
                $name = isset($user->name) ? $user->name : $user->nickname;
                $newUser = User::create([
                    'name' => $name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'picture' => $user['avatar_url'],
                    'social_type' => 'github',
                    'password' => bcrypt('my-github'),
                ]);

                Auth::login($newUser);

                return redirect()->to('home');
            }
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
