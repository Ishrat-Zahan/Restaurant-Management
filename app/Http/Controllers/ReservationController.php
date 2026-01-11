<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Mealperiod;
use App\Models\Status;
use App\Models\User;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['res'] = Reservation::with(['mealperiod', 'user'])->orderBy('id', 'desc')->paginate(10);
        
       
        return view("admin.reservation.all",$data);
        // ->with("meal", $meal)
        // ->with("user", $user);
        // dd($meal);
        // dd($user);
        // dd(Reservation::all());
        // dd($data['res']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $meal = Mealperiod::all();
        $status = Status::all();
        

        return view('admin.reservation.create', ['meal' => $meal,'status'=>$status]);

        // $meal = Mealperiod::pluck('name', 'id');
        // return view('admin.reservation.create')
        // ->with("reservation",null)
        // ->with("meal",$meal);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        // Reservation::create($request->all());

        $data = [
            'user_id' => $request->cid,
            'mealperiod_id' => $request->meal_period,
            'date' => $request->date,
            'person' => $request->person,
            'status_id' => $request->status,         

        ];
        $c = Reservation::create($data);

        if($request->website){
            return response()->json($c);
        }
        else{
            return redirect("reservation")->with("success", "Successfully created");
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {

        return view('admin.reservation.show')->with('res', $reservation);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        // dd($reservation);
        $meal = Mealperiod::all();
        $status = Status::all();
        return view('admin.reservation.edit',['reservation'=>$reservation,
        'meal'=>$meal, 'status'=>$status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {

        $reservation->user_id = $request->cid;
        $reservation->mealperiod_id = $request->meal_period;
        $reservation->date = $request->date;
        $reservation->person = $request->person;
        $reservation->status_id = $request->status;

        $reservation->save();
        return redirect()->route("reservation.index");
            
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        if(Reservation::destroy($reservation->id)){
            return redirect("reservation")->with("success", "Successfully Deleted");  
        }
    }
}
