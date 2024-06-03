<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware([IsAdmin::class]);
    }

    public function open_admin() {
        return view('admin', ['user' => null]);
    }

    public function user_search(Request $request)
    {
        $validatedData = $request->validate([
            'user_prefix' => 'required|string'
        ]);
        $user = User::where('name', $request->user_prefix)->first();
        return view('admin', ['user' => $user]);
    }
    public function ban_user($id)
    {
        $user = User::where('id', $id)->first();
        $ban = ($user->is_ban == 1)? 0 : 1;
        User::where('id', $id)->update([
            'is_ban' => $ban
        ]);
        return view('admin', ['user' => User::where('name', $user->name)->first()]);
    }
}
