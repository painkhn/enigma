<?php

namespace App\Http\Controllers;

use App\Models\{Category, Theme, Theme_create, User};
use App\Http\Middleware\IsAdmin;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    // public function __construct() {
    //     $this->middleware([IsAdmin::class]);
    // }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::get();
        $theme = Theme::orderBy('created_at', 'DESC')->get();
        return view('index', ['categories'=>$category, 'themes'=>$theme]);
    }

    public function themes_by($id) 
    {
        $theme = Theme::where('user_id', $id)->get();
        $user = User::where('id', $id)->first();
        return view('themes_by', ['themes'=>$theme]);

    }

    public function profile($id)
    {
        $theme = Theme::where('user_id', $id)->get();
        $user = User::where('id', $id)->first();
        return view('profile', ['user' => $user, 'themes' => $theme]);
    }

    public function create()
    {
        $category = Category::get();
        return view('theme_create', ['categories' => $category]);
    }

    public function category_page($category) {
        $category_list = Category::get();
        $category_info = Category::where('link', $category)->first();
        $theme = Theme::where('category_id', $category_info->id)->orderBy('created_at', 'DESC')->get();
        return view('category_page', ['categories'=> $category_info, 'themes'=>$theme, 'categories_list' => $category_list]);
    }

    public function search(Request $request) {
        $word = $request->word;
        $theme_search = Theme::where('name', 'like', "%{$word}%")->orderBy('id')->get();
        return view('index', ['categories' => Category::get(), 'themes' => $theme_search]);
    }

    public function updateAvatar(Request $request)
    {
        $validated = $request->validate([
            'avatar_change' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);
        
        $user = User::where('id', Auth::user()->id)->first();
        $avatarPath = $user->avatar;
        if (file_exists($avatarPath)) {
            unlink($avatarPath);
        }

        $name = time(). ".". $request->file('avatar_change')->extension();
        $destination = 'public/avatars';
        $path = $request->file('avatar_change')->storeAs($destination, $name);
        User::where('id', Auth::user()->id)->update([
            'avatar' => 'storage/avatars/' . $name
        ]);
    
        return redirect()->back();
    }

}