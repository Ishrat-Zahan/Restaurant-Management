<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Mealperiod;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $latest = Menu::with(['category', 'subcategory', 'images'])->latest()->take(4)->get();
        
        // Get meal periods for booking form
        $meal = Mealperiod::all();
        
        // Get user info if logged in
        $userId = null;
        $userName = null;
        $userEmail = null;
        
        if (Auth::check()) {
            $user = Auth::user();
            $userId = $user->id;
            $userName = $user->name;
            $userEmail = $user->email;
        }
        
        return view('website.layout.content', [
            'latest' => $latest,
            'meal' => $meal,
            'userId' => $userId,
            'userName' => $userName,
            'userEmail' => $userEmail,
        ]);
    }
    public function menu()
    {
        $menu = Menu::with(['category', 'subcategory', 'images'])->get();
        $categories = Category::all();

        return view('website.menu', [
            'menu' => $menu,
            'categories' => $categories
        ]);
    }
    public function single($id)
    {
        $single = Menu::with(['category', 'subcategory', 'images'])->findOrFail($id);
        // dd($single); 

        return view('website.single', compact('single'));
    }

    public function about(){
        return view('website.about');
    }

    public function contact(){
        return view('website.contact');
    }
}
