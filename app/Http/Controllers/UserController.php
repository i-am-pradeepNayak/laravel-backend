<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    //
    function register(Request $req)
    {
        $user = new User;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        $user->mobileno = $req->input('mobileno');
        $user->ctype = $req->input('ctype');
        $user->csector = $req->input('csector');
        $user->pincode = $req->input('pincode');
        $user->gstin = $req->input('gstin');
        $user->error = 1;


        $user->save();
        return $user;
    }

    function login(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return ["error" => 0];
        }
        return $user;
    }

    public function showUserName($id)
    {
        $users = User::find($id);
        $username = $users->name;

        return  response()->json($username);
    }
}
