@extends('layout.erp.app')
@section('page')

<div class="page-header-admin">
    <h3>Orders</h3>
    <span></span>
</div>

<div class="admin-table">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Billing Address</th>
                <th>Shipping Address</th>
                <th>Total</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($order as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->user->name}}</td>
                <td>{{$row->billing_address}}</td>
                <td>{{$row->shipping_address}}</td>
                <td>{{$row->total}}</td>
                <td>{{$row->comment}}</td>
                <td>
                    <span class="badge {{ $row->status == 'completed' ? 'bg-success' : ($row->status == 'pending' ? 'bg-warning' : 'bg-secondary') }}">
                        {{$row->status}}
                    </span>
                </td>
                <td>
                    <div class="action-icons">
                        <a class="action-icon view" href="{{route('order.show',$row->id)}}" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="action-icon edit" href="{{route('order.edit',$row->id)}}" title="Edit">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form class="d-inline" onsubmit="return confirm('Are you sure you want to delete this order?')" action="{{route('order.destroy',$row->id)}}" method="post">
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
                <td colspan="8" class="text-center py-4 text-muted">No orders found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $order->links() }}
</div>

@endsection
