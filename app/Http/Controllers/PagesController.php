<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Models\TodoList;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $todo = TodoList::where('user_id', $user->id)->get();
        return view('welcome', ['todoLists' => $todo]);
    }
    public function login()
    {
        return view('users.login');
    }

    public function register()
    {
        return view('users.register');
    }
}
