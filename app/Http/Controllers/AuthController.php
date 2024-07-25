<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        // Temukan atau buat pengguna di database
        $authUser = $this->findOrCreateUser($user);

        // Masukkan pengguna ke sesi
        Auth::login($authUser, true);

        return redirect()->route('home'); // Arahkan pengguna setelah login
    }

    private function findOrCreateUser($socialUser)
    {
        $user = User::where('email', $socialUser->email)->first();

        if ($user) {
            return $user;
        }

        return User::create([
            'id_user' => Str::uuid()->toString(),
            'name' => $socialUser->name,
            'email' => $socialUser->email,
            // 'password' => bcrypt(str_random(16)), // Buat password acak
        ]);
    }


    public function register()
    {
        return view('auth-register');
    }

    public function registerAct(Request $request)
    {

        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        Auth::login($user);

        return redirect()->route('home');
    }

    public function login()
    {
        return view('auth-login');
    }

    public function loginAct(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
