@include('admin.layouts.head')
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('admin.layouts.sidebar')
            @include('admin.layouts.topbar')
            <!-- page content -->
            @yield('content')
            <!-- /page content -->
            @include('admin.layouts.footer')