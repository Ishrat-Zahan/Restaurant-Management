<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Mealperiod;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{



   public function index()
   {

      //  return view ('website.cart');

   }
   public function cartapi($id)
   {

      $single = Menu::with(['category', 'subcategory', 'images'])->findOrFail($id);

      return response()->json($single);
   }

   public function reserve()
   {

      if (auth()->check()) {
         $userId = null;
         $userName = null;

         $user = Auth::user();

         if ($user) {
            $userId = $user->id;
            $userName = $user->name;
            $userEmail = $user->email;
         }

         $meal = Mealperiod::all();
         return view('website.reservation', [
            'meal' => $meal,
            'userId' => $userId,
            'userName' => $userName,
            'userEmail' => $userEmail,
         ]);
         // dd("Reached here");
        
      } else {
         return redirect()->route('register');
       
      }
   }
}
