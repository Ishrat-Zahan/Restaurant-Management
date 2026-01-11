@extends('layout.erp.app')
@section('page')

<div class="page-header-admin">
    <h3>Materials</h3>
    <a href="{{route('material.create')}}" class="btn-add"><i class="fas fa-plus"></i> Add Material</a>
</div>

<div class="admin-table">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Unit</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($material as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->unit}}</td>
                <td>{{$row->quantity}}</td>
                <td>
                    <div class="action-icons">
                        <a class="action-icon edit" href="{{route('material.edit',$row->id)}}" title="Edit">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form class="d-inline" onsubmit="return confirm('Are you sure you want to delete this material?')" action="{{route('material.destroy',$row->id)}}" method="post">
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
                <td colspan="5" class="text-center py-4 text-muted">No materials found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $material->links() }}
</div>

@endsection
