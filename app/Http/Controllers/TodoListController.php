<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class TodoListController extends Controller
{

    public function store(Request $request)
    {
        $todo = new TodoList();
        $todo->title = $request->title;
        $todo->user_id = Auth::user()->id;
        session()->flash('success', 'Yeee TodoList Berhasil ditambah🤞👋');
        $todo->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        $todo = TodoList::find($id);
        $todo->delete();
        session()->flash('danger', 'Yeee TodoList Berhasil dihapus🤞👋');
        return redirect()->back();
    }
}
