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

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="text-center text-success">Create Customer</h3>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('cuser.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="customerModal" value="modal">

                            <label for="">Name</label>
                            <input id="cuname" type="text" name="name" class="form-control">

                            <label for="">Email</label>
                            <input id="cuemail" type="email" name="email" class="form-control">

                            <label for="">Password</label>
                            <input id="cupassword" type="password" name="password" id="password" class="form-control" required >

                            <input id="createCustomer" type="button" class="btn-primary-custom mt-2" value="Create">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- <p class="text-success">Name:Ishrat</p>
        <p class="text-success">Email:Ishrat@gmail.com</p> -->

    </div>
</div>


<table style="width: 93%; margin:auto" class="table table-bordered mt-4">
    <thead>
        <tr>
            <th colspan="2" class="text-center">
                <h4 class="text-success">Create Reservation</h4>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="{{route('reservation.store')}}" method="post">
            @csrf
            <tr>
                <td>Name</td>

                <td class="d-flex justify-content-between">

                    <div>
                        <input type="text" class='auto form-control' id="customername" value="">

                    </div>
                    <div class="me-2">
                        <p id="cname" class="text-success"></p>
                        <p id="cemail" class="text-success"></p>

                    </div>

                </td>
            </tr>
            <tr><input name="cid" id="cid" type="hidden" value=""></tr>

            <tr>
                <td>Meal Period</td>
                <td>
                    <select class="form-select" name="meal_period" required>
                        <option value="-1">Select meal period</option>

                        @forelse ($meal as $row)

                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @empty

                        @endforelse
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date</td>
                <td>
                    <input class="form-control" type="date" name="date" required>
                </td>
            </tr>
            <tr>
                <td>Person</td>
                <td>
                    <input class="form-control" type="number" name="person" required>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select class="form-select" name="status" required>
                        <option value="-1">Select Status</option>

                        @forelse ($status as $row)

                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @empty

                        @endforelse

                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="btn-primary-custom mt-3" type="submit" value="Add Reservation">
                </td>
            </tr>
        </form>
    </tbody>
</table>


@endsection

@section('script')

<script>
    $("#customername").autocomplete({
        source: "{{url('csearch')}}",
        minLength: 1,
        select: function(event, ui) {
            console.log(ui)
            var id = ui.item.id;

            $('#cname').html(ui.item.name)
            $('#cemail').html(ui.item.email)
            $('#cid').val(ui.item.id)

        }

    });


    $(document).ready(function() {
        $("#createCustomer").click(function() {

            // alert(5);

            $.ajax({
                    method: "POST",
                    url: "{{route('cuser.store')}}",
                    data: {
                        name: $("#cuname").val(),
                        email: $("#cuemail").val(),
                        password: $("#cupassword").val(),
                        customerModal: "dsafgkjfg"
                    },
                })
                .done(function(data) {
                    $('#cname').html(data.name)
                    $('#cemail').html(data.email)
                    $('#cid').val(data.id)

                    // $("#exampleModal").hide();
                    // location.reload();
                    //console.log(msg);
                    //alert( "Data Saved: " + msg );
                });

        });
    });
</script>





@endsection