<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $r)
    {
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r)
    {
        $user = User::find($r->id);
        //função que exibe address na relação hasOne
        // $user['address']=$user->address;  
        //função que exibe addresses na relação hasMany
        $user['addresses'] = $user->addresses;
        return $user;
    }


    public function new_user(Request $r)
    {

        $rawData = $r->only([
            'name',
            'email',
            'password'
        ]);

        $user = User::create($rawData);
        $user->save();
        return $user;
    }
}
