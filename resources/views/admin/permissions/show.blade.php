@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Permission: {{ $permission->name }}</h3>
        </div>
        <!-- /.card-header -->
        <div style="overflow-x:auto;">
            <div class="card-body">

            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
