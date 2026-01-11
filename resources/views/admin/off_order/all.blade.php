@extends('layout.erp.app')
@section('page')

<div class="page-header-admin">
    <h3>Offline Orders</h3>
    <a href="{{route('off_order.create')}}" class="btn-add"><i class="fas fa-plus"></i> Add Order</a>
</div>

<div class="admin-table">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Table</th>
                <th>Total</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($order as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->tab_id}}</td>
                <td>{{$row->total}}</td>
                <td>
                    <span class="badge {{ $row->active ? 'bg-success' : 'bg-secondary' }}">
                        {{ $row->active ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td>
                    <div class="action-icons">
                        <a class="action-icon view" href="{{route('off_order.show',$row->id)}}" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="action-icon edit" href="{{route('off_order.edit',$row->id)}}" title="Edit">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form class="d-inline" onsubmit="return confirm('Are you sure you want to delete this order?')" action="{{route('off_order.destroy',$row->id)}}" method="post">
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
                <td colspan="5" class="text-center py-4 text-muted">No offline orders found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $order->links() }}
</div>

@endsection
