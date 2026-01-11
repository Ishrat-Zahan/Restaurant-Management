@extends('layout.erp.app')
@section('page')

<div class="page-header-admin">
    <h3>Payments</h3>
    <span></span>
</div>

<div class="admin-table">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Table</th>
                <th>Total</th>
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
                    <div class="action-icons">
                        <a class="action-icon view" href="{{url('paid')}}/{{$row->id}}" title="Mark as Paid" style="background: #dcfce7; color: #16a34a; padding: 6px 12px; border-radius: 6px; font-size: 13px; font-weight: 500;">
                            <i class="fas fa-check me-1"></i> Paid
                        </a>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center py-4 text-muted">No pending payments</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $order->links() }}
</div>

@endsection
