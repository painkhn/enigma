<?php

namespace App\Http\Controllers;

use App\Models\{Category, Theme, Theme_create};
use Illuminate\Http\Request;

class HomeController extends Controller
{
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
        return view('components.index', ['categories'=>$category, 'themes'=>$theme]);
    }

    public function profile()
    {
        return view('profile');
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
}