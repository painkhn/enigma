<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Theme, Category, User};
use Auth;

class ThemeController extends Controller
{
    public function create_theme(Request $request) 
    {
        $user = Auth::user()->id;
        $theme = Theme::create([
            'category_id' => $request->category,
            'user_id'=> $user,
            'name' => $request->themeName,
            'content' => $request->themeContent
        ]);
        $theme->save();
        return redirect()->route('profile', ['id' => $user]);
    }
    public function theme($theme_id) 
    {
        // dd($theme_id);
        $theme = Theme::where('id', $theme_id)->first();
        $user = User::where('id', $theme->user_id)->first();
        $category = Category::where('id', $theme->category_id)->first();
        return view('theme', ['theme_info' => $theme, 'category' => $category, 'user' => $user]);
    }
}
