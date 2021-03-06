@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Permissions list</h3>
        </div>
        <!-- /.card-header -->
        <div style="overflow-x:auto;">
            <div class="card-body">
                @include('admin.permissions.table-permissions')
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
