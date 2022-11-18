<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'src' => 'required',
        ]);
        Image::make($request->file('src'))->resize(90, 100)->save('src/users/' . $request->file('src')->hashName());
        // dd($request);

        $store = new User();
        $store->src = $request->file('src')->hashName();
        $store->name = $request->name;
        $store->password = Hash::make($request->password);
        $store->email = $request->email;
        // $store->user_id = $request->user_id;
        $store->save();
        // $user = User::create([
        //     // $store = new User();
        //     'name' => $request->name,
        //     'src' => $request->file('src'),
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),

        // ]);
        // dd($user);
        event(new Registered($store));

        Auth::login($store);

        return redirect('/');
    }
}
