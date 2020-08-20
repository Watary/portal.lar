<table class="table table-bordered table-striped">
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
                <a href="{{ route('admin.permissions.show', ['id' => $permission->id]) }}" class="btn btn-block bg-gradient-success">Show</a>
                <a href="{{ route('admin.permissions.edit', ['id' => $permission->id]) }}" class="btn btn-block bg-gradient-primary">Edit</a>
                <button type="button" class="btn btn-block bg-gradient-danger">Delete</button>
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
