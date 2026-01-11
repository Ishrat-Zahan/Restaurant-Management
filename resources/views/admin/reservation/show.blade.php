@extends('layout.erp.app')
@section('page')


<div style="border-top: 1px solid #198754;" class="row d-flex justify-content-around">
    <div class="col-4">
        <h4 class="text-success mt-4">From</h4>
        <p class="text-success">House:03,Road:10,Block:C <br>
            Mirpur Dhaka <br> Mobile:01799217813 <br> mixyfood@gmail.com</p>
    </div>
    <div class="col-4">
    </div>
    <div class="col-auto">

        <h4 class="text-success mt-4">Customer</h4>

        <!-- <a href="" class="btn btn-outline-success"> + </a> -->

        <p class="text-success">Name:{{$res->user->name}}</p>
        <p class="text-success">Email:{{$res->user->email}}</p>

    </div>
</div>


<table style="width: 93%; margin:auto" class="table table-bordered mt-4">
    <thead>
        <tr>
            <th colspan="2" class="text-center">
                <h4 class="text-success">Reservation ID:{{$res->id}}</h4>
            </th>
        </tr>
    </thead>
    <tbody>

            <tr>
                <td>Meal Period</td>
                <td>
                    <h5 class="text-success">{{$res->mealperiod->name}}</h5>
                </td>
            </tr>
            <tr>
                <td>Date</td>
                <td>
                <h5 class="text-success">{{$res->date}}</h5>
                </td>
            </tr>
            <tr>
                <td>Person</td>
                <td>
                <h5 class="text-success">{{$res->person}}</h5>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                <h5 class="text-success">{{$res->status->name}}</h5>
                </td>
            </tr>


    </tbody>
</table>


@endsection