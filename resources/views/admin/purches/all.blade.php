@extends('layout.erp.app')
@section('page')

<div class="page-header-admin">
    <h3>Purchases</h3>
    <a href="{{route('purches.create')}}" class="btn-add"><i class="fas fa-plus"></i> Add Purchase</a>
</div>

<div class="admin-table">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Supplier</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($purches as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->supplier->name}}</td>
                <td>{{$row->total}}</td>
                <td>
                    <div class="action-icons">
                        <a class="action-icon view" href="{{route('purches.show',$row->id)}}" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="action-icon edit" href="{{route('purches.edit',$row->id)}}" title="Edit">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form class="d-inline" onsubmit="return confirm('Are you sure you want to delete this purchase?')" action="{{route('purches.destroy',$row->id)}}" method="post">
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
                <td colspan="4" class="text-center py-4 text-muted">No purchases found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $purches->links() }}
</div>

@endsection
