<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Dashboard</title>

        @include('admin.layouts.path.assets-head')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            @include('admin.layouts.path.navbar')

            @include('admin.layouts.path.sidebar-left')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                @include('admin.layouts.path.content-header')

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">

                        @yield('content')

                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            @include('admin.layouts.path.footer')

            @include('admin.layouts.path.sidebar-right')

        </div>
        <!-- ./wrapper -->

        @include('admin.layouts.path.assets-footer')
    </body>
</html>
