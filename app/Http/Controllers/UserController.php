<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('users.index', compact('users'));
    }

    public function store()
    {
        //membuat user baru
       $user = new User();
        $user->name='admin cafe';
        $user->email='cafeamendemy@gmail.com';
        $user->password =bcrypt('password');
        $user->gender='wanita';
        $user->age=25;
        $user->address='jl.kenangan bersama kamu';
        $user->birth='12-12-1951';
        $user->save();

        //membuat profile baru
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->name= 'rohmat';
        $profile->gender='pria';    
        $profile->age= '25';
        $profile->address='jl.kenangan bersama kamu';
        $profile->save();
    }
}
