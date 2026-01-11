@extends('layout.erp.app')
@section('page')

<div class="page-header-admin">
    <h3>Tables</h3>
    <a href="{{route('tab.create')}}" class="btn-add"><i class="fas fa-plus"></i> Add Table</a>
</div>

<div class="admin-table">
    <table class="table mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Capacity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tabs as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->capacity}}</td>
                <td>
                    <div class="action-icons">
                        <a class="action-icon edit" href="{{route('tab.edit',$row->id)}}" title="Edit">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form class="d-inline" onsubmit="return confirm('Are you sure you want to delete this table?')" action="{{route('tab.destroy',$row->id)}}" method="post">
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
                <td colspan="4" class="text-center py-4 text-muted">No tables found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $tabs->links() }}
</div>

@endsection
