<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
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
        return redirect('profile');
    }
}
