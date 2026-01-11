@extends('layout.erp.app')
@section('page')

<div class="page-header-admin">
    <h3>Categories</h3>
    <a href="{{route('category.create')}}" class="btn-add"><i class="fas fa-plus"></i> Add Category</a>
</div>

<div class="admin-table">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cats as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                <td style="width: 80px;">
                    <img style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;" src="{{asset('storage/')}}/{{$cat->images}}" alt="">
                </td>
                <td>
                    <div class="action-icons">
                        <a class="action-icon edit" href="{{route('category.edit',$cat->id)}}" title="Edit">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form class="d-inline" onsubmit="return confirm('Are you sure you want to delete this category?')" action="{{route('category.destroy',$cat->id)}}" method="post">
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
                <td colspan="4" class="text-center py-4 text-muted">No categories found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{$cats->onEachSide(2)->links()}}
</div>

@endsection
