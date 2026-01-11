@extends('layout.erp.app')
@section('page')

<table style="width: 50%; margin: auto;" class="table table-bordered mt-4">
    <thead>
        <tr>
            <th colspan="2" class="text-center">
                <h4 class="text-success">Create Category</h4>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <tr>
                <td>Name</td>
                <td>
                    <input class="form-control" type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>Images</td>
                <td>
                    <input type="file" name="images" id="images" class="form-control" required >
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="btn-primary-custom mt-3" type="submit" value="Add Category">
                </td>
            </tr>
        </form>
    </tbody>
</table>


@endsection