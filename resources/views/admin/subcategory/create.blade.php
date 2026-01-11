@extends('layout.erp.app')
@section('page')

<table style="width: 93%; margin: auto;" class="table table-bordered mt-4">
    <thead>
        <tr>
            <th colspan="2" class="text-center">
                <h4 class="text-success">Create Subcategory</h4>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="{{ route('subcategory.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <tr>
                <td>Name</td>
                <td>
                    <input class="form-control" type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select class="form-select" name="category_id" required>
                        <option value="-1">Select Category</option>
                        
                        @forelse ($cat as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @empty
                        @endforelse
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>Images</td>
                <td>
                    <input type="file" name="images[]" id="images" class="form-control" required multiple>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="btn-primary-custom mt-3" type="submit" value="Add Subcategory">
                </td>
            </tr>
        </form>
    </tbody>
</table>

@endsection
