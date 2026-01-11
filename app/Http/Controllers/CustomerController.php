<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{


    public function search(Request $request)
    {
        if ($request->has('term')) {
            $term = $request->input('term');
            $customers = User::where('name', 'LIKE', '%' . $term . '%')
                ->select('id', 'name','email')
                ->get();

            $return_arr = [];
            foreach ($customers as $customer) {
                $return_arr[] = [
                    'label' => $customer->name,
                    'value' => $customer->name,
                    'id' => $customer->id,
                    'name' => $customer->name,
                    'email' => $customer->email,
                    
                ];
            }

            return response()->json($return_arr);
        }
    }


}
