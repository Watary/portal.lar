@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Permissions list</h3>
            <div class="card-tools">
                <a href="{{ route('admin.permissions.create') }}" class="btn btn-block btn-success btn-sm">Create permission</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div style="overflow-x:auto;">
            <div class="card-body">
                <table class="table table-bordered table-striped data-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Guard name</th>
                        <th>In roles</th>
                        <th>In users</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Actions</th>
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
                            <td>
                                @foreach($permission->users as $user)
                                    <span class="badge bg-green">{{ $user->name }}</span>
                                @endforeach
                            </td>
                            <td>{{ $permission->created_at }}</td>
                            <td>{{ $permission->updated_at }}</td>
                            <td>
                                <button type="button" class="btn btn-block bg-gradient-success">info</button>
                                <button type="button" class="btn btn-block bg-gradient-primary">update</button>
                                <button type="button" class="btn btn-block bg-gradient-danger">delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Guard name</th>
                        <th>In roles</th>
                        <th>In users</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
