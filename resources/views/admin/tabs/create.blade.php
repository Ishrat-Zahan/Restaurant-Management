@extends('layout.erp.app')
@section('page')

<table style="width: 50%; margin: auto;" class="table table-bordered mt-4">
    <thead>
        <tr>
            <th colspan="2" class="text-center">
                <h4 class="text-success">Create Tables</h4>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="{{ route('tab.store') }}" method="post">
            @csrf
            <tr>
                <td>Name</td>
                <td>
                    <input class="form-control" type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>Capacity</td>
                <td>
                    <input type="number" name="capacity"  class="form-control" required >
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="btn-primary-custom mt-3" type="submit" value="Create Table">
                </td>
            </tr>
        </form>
    </tbody>
</table>

@endsection