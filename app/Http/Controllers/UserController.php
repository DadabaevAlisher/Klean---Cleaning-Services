<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        return 'Index controllerdan salom';
    }

    public function show($user)
    {
        return 'Siz tanlagan user : ' . $user;
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit($user_id)
    {
        return $user_id . "ni o'zgartirish";
    }
}
