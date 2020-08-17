@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table-striped data-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Guard name</th>
                    <th>Roles</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td>
                            @foreach($permission->roles as $permission)
                                <span class="badge bg-green">{{ $permission->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $permission->created_at }}</td>
                        <td>{{ $permission->updated_at }}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Guard name</th>
                    <th>Roles</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
