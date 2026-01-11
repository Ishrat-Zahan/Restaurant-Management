@extends('layout.erp.app')
@section('page')

<table style="width: 50%; margin: auto;" class="table table-bordered mt-4">
    <thead>
        <tr>
            <th colspan="2" class="text-center">
                <h4 class="text-success">Edit Category</h4>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <tr>
                <td>Name</td>
                <td>
                    <input class="form-control" type="text" name="name" value="{{ $category->name }}" required>
                </td>
            </tr>
            <tr>
                <td>Current Image</td>
                <td>
                    <!-- Display the current image here (if applicable) -->
                    @if($category->images && file_exists(public_path('storage/' . $category->images)))
                        <img src="{{ asset('storage/' . $category->images) }}" alt="Category Image" style="max-width: 100px; max-height: 100px; margin: 5px;">
                    @else
                        <p>No image found.</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td>New Image</td>
                <td>
                    <input type="file" name="images" id="images" class="form-control">
                    <!-- You can use this field to upload a new image if needed -->
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="btn-primary-custom mt-3" type="submit" value="Update Category">
                </td>
            </tr>
        </form>
    </tbody>
</table>

@endsection
