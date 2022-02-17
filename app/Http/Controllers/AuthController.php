<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showAuthPage()
    {
        return view('auth-page');
    }
    
    public function register(Request $request)
    {
        $user = User::create([
            'name'  =>  $request->name,
            'email' =>  $request->email,
            'password'  =>  Hash::make($request->password)
        ]);

        return redirect()->back()->with('message', 'User registered!');
    }
    
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        $isInvalidCred = !$user || !Hash::check($request->password, $user->password);

        if($isInvalidCred){
            return redirect()->back()->with('message', 'Invalid Credentials!');
        }

        return redirect('/home');
    }

    public function home()
    {
        return view('home',[
            'users' => User::select('*')->get()
        ]);
    }

    public function edit($id)
    {
        return view('edit',[
            'user' => User::select('*')->where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([
            'name'  =>  $request->name,
            'email' =>  $request->email
        ]);

        return redirect('/home')->with('message', $id . ' is updated.');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('message', $id . ' is deleted.');
    }
}
