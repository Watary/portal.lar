@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div style="overflow-x:auto;">
            <div class="card-body">
                <form action="{{ route('admin.permissions.store') }}" method="post" class="item-create">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
