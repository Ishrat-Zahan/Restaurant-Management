<?php

namespace App\Http\Controllers;

use App\Models\off_order;
use App\Http\Requests\Storeoff_orderRequest;
use App\Http\Requests\Updateoff_orderRequest;
use App\Models\Menu;
use App\Models\off_order_details;
use App\Models\tab;
use Illuminate\Http\Request;

class OffOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = off_order::orderBy('id', 'desc')->paginate(10);
        return view('admin.off_order.all', ['order' => $order]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tab = tab::all();
        return view('admin.off_order.create', ['tab' => $tab]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeoff_orderRequest $request)
    {
        //...... order........

        $tab_id = $request->input('tab_id');
        $total = $request->input('grandtotal');


        $order = off_order::create([
            'tab_id' => $tab_id,
            'total' => $total,
        ]);

        //...... order_details........

        if ($order) {
            $orders = $request->input('orders', []);
            $details = [];

            foreach ($orders as $row) {
                $menu_id = $row['menu_id'];
                $qty = $row['qty'];


                $details[] = [
                    'off_order_id' => $order->id,
                    'menu_id' => $menu_id,
                    'quantity' => $qty,
                ];
            }


            off_order_details::insert($details);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Order created successfully!',

        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(off_order $off_order)
    {
        $off_order->loadMissing(['off_order_details.menu']);
        // $menu = Menu::where('id',$off_order->off_order_details->menu_id)->get();
        // dd($menu);
        return view('admin.off_order.show')->with(['off_order'=>$off_order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(off_order $off_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateoff_orderRequest $request, off_order $off_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(off_order $off_order)
    {
            if (off_order::destroy($off_order->id)) {
                return redirect("off_order")->with("success", "Successfully Deleted");
            }
        
    }
    public function payment(){
        $order = off_order::where('active', '1')->orderBy('id', 'desc')->paginate(10);
        return view('admin.payment.all', compact('order'));
    }
    public function paid($id){

        // dd($id);
        $p = off_order::where("id",$id)->update([
            'active' => '0'

        ]);
        return redirect()->route("payment");
      

    }

    public function psearch(Request $request)
    {
        if ($request->has('term')) {
            $term = $request->input('term');
            $menus = Menu::where('name', 'LIKE', '%' . $term . '%')
                ->select('id', 'name', 'price')
                ->get();

            $return_arr = [];
            foreach ($menus as $menu) {
                $return_arr[] = [
                    'label' => $menu->name,
                    'value' => $menu->name,
                    'id' => $menu->id,
                    'name' => $menu->name,
                    'price' => $menu->price,


                ];
            }

            return response()->json($return_arr);
        }
    }
}
