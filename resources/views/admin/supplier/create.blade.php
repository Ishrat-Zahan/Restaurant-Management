@extends('layout.erp.app')
@section('page')

<table style="width: 50%; margin: auto;" class="table table-bordered mt-4">
    <thead>
        <tr>
            <th colspan="2" class="text-center">
                <h4 class="text-success">Create Supplier</h4>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="{{ route('supplier.store') }}" method="post">
            @csrf
            <tr>
                <td>Name</td>
                <td>
                    <input class="form-control" type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" id="email" class="form-control" required >
                </td>
            </tr>
           
                <td colspan="2">
                    <input class="btn-primary-custom mt-3" type="submit" value="Create Supplier">
                </td>
            </tr>
        </form>
    </tbody>
</table>

@endsection