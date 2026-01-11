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

        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            +
        </button>

        <!-- Customer creation modal... -->

        <!-- <p class="text-success">Name:Ishrat</p>
        <p class="text-success">Email:Ishrat@gmail.com</p> -->

    </div>
</div>

<table style="width: 93%; margin:auto" class="table table-bordered mt-4">
    <thead>
        <tr>
            <th colspan="2" class="text-center">
                <h4 class="text-success">Edit Reservation</h4>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="{{ route('reservation.update', $reservation->id) }}" method="post">
            @csrf
            @method('PUT')

            <tr>
                <td>Name</td>
                <td>
                    <input name="cid" type="hidden" class='auto form-control' id="customername" value="{{ $reservation->user->id }}">

                </td>
            </tr>

            <tr>
                <td>Meal Period</td>
                <td>
                    <select class="form-select" name="meal_period" required>
                        <option value="-1">Select meal period</option>
                        @foreach ($meal as $row)
                        <option value="{{ $row->id }}" {{ $reservation->mealperiod_id == $row->id ? 'selected' : '' }}>
                            {{ $row->name }}
                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date</td>
                <td>
                    <input class="form-control" type="date" name="date" value="{{ $reservation->date }}" required>
                </td>
            </tr>
            <tr>
                <td>Person</td>
                <td>
                    <input class="form-control" type="number" name="person" value="{{ $reservation->person }}" required>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select class="form-select" name="status" required>
                        <option value="-1">Select Status</option>
                        @foreach ($status as $row)
                        <option value="{{ $row->id }}" {{ $reservation->status_id == $row->id ? 'selected' : '' }}>
                            {{ $row->name }}
                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="btn-primary-custom mt-3" type="submit" value="Update Reservation">
                </td>
            </tr>
        </form>
    </tbody>
</table>

@endsection