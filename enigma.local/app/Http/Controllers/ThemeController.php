<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Theme, Category, User, Comments};
use App\Http\Middleware\IsAdmin;
use Auth;

class ThemeController extends Controller
{
    public function __construct() {
        $this->middleware([IsAdmin::class]);
    }
    
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
        $comment = Comments::with('user')->where('theme_id', $theme_id)->get();
        return view('theme', ['comment' => $comment, 'theme_info' => $theme, 'category' => $category, 'user' => $user]);
    }
    public function comment_create($theme_id, Request $request) {
        $theme = Theme::where('id', $theme_id)->first();
        $user = Auth::user()->id;
        $comment = Comments::create([
            'user_id' => $user,
            'theme_id' => $theme->id,
            'comment' => $request->comment,
        ]);
        $comment->save();
        return redirect()->back();
    }
    public function comment_delete($comment_id) {
        Comments::where('id', $comment_id)->delete();
        return redirect()->back();
    }
}
