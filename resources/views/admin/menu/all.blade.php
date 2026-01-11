@extends('layout.erp.app')
@section('page')

<div class="page-header-admin">
    <h3>Menu Items</h3>
    <a href="{{route('menu.create')}}" class="btn-add"><i class="fas fa-plus"></i> Add Menu</a>
</div>

<div class="admin-table">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($menu as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->category->name}}</td>
                <td>{{$row->subcategory->name}}</td>
                <td style="width: 80px;">
                    @forelse ($row->images as $image)
                    <img style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;" src="{{asset('storage/'.$image->name)}}" alt="">
                    @empty
                    <span class="text-muted">No image</span>
                    @endforelse
                </td>
                <td>
                    <div class="action-icons">
                        <a class="action-icon edit" href="{{route('menu.edit',$row->id)}}" title="Edit">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?')" action="{{route('menu.destroy',$row->id)}}" method="post">
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
                <td colspan="6" class="text-center py-4 text-muted">No menu items found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $menu->links() }}
</div>

@endsection
