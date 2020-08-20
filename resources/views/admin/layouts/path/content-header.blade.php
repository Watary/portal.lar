<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark page-title">
                    @isset($page['title'])
                        {{ $page['title'] }}
                    @else
                        Dashboard
                    @endisset
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <div class="nav-item dropdown float-right page-actions">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-th-large"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="{{ route('admin.permissions.create') }}" class="dropdown-item">
                            <i class="fas fa-plus-square mr-2"></i> Create permission
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-pen-square mr-2"></i> Edit permission
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-minus-square mr-2"></i> Delete Permission
                        </a>
                    </div>
                </div>

                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
