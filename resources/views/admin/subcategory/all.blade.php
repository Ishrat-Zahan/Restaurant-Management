@extends('layout.erp.app')
@section('page')

<div class="page-header-admin">
    <h3>Subcategories</h3>
    <a href="{{route('subcategory.create')}}" class="btn-add"><i class="fas fa-plus"></i> Add Subcategory</a>
</div>

<div class="admin-table">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subcat as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->category->name}}</td>
                <td style="width: 80px;">
                    <img style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;" src="{{asset('storage/')}}/{{$row->images}}" alt="">
                </td>
                <td>
                    <div class="action-icons">
                        <a class="action-icon edit" href="{{route('subcategory.edit',$row->id)}}" title="Edit">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form class="d-inline" onsubmit="return confirm('Are you sure you want to delete this subcategory?')" action="{{route('subcategory.destroy',$row->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="action-icon delete" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center py-4 text-muted">No subcategories found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $subcat->links() }}
</div>

@endsection
