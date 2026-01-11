@extends('layout.erp.app')
@section('page')

<div class="page-header-admin">
    <h3>Reservations</h3>
    <a href="{{route('reservation.create')}}" class="btn-add"><i class="fas fa-plus"></i> Add Reservation</a>
</div>

<div class="admin-table">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Meal Period</th>
                <th>Guests</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($res as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->user->name}}</td>
                <td>{{$row->mealperiod->name}}</td>
                <td>{{$row->person}}</td>
                <td>{{$row->date}}</td>
                <td>
                    <span class="badge {{ $row->status->name == 'confirmed' ? 'bg-success' : ($row->status->name == 'pending' ? 'bg-warning' : 'bg-secondary') }}">
                        {{$row->status->name}}
                    </span>
                </td>
                <td>
                    <div class="action-icons">
                        <a class="action-icon view" href="{{route('reservation.show',$row->id)}}" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="action-icon edit" href="{{route('reservation.edit',$row->id)}}" title="Edit">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form class="d-inline" onsubmit="return confirm('Are you sure you want to delete this reservation?')" action="{{route('reservation.destroy',$row->id)}}" method="post">
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
                <td colspan="7" class="text-center py-4 text-muted">No reservations found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $res->links() }}
</div>

@endsection
