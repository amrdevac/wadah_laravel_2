<!-- Site wrapper -->
<div class="wrapper" id="app">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        </ul>
    </nav>
    @include('inc.sidebar-df')
    <div class="content-wrapper">
        <div class="container py-4">
            <app></app>
        </div>
    </div>
</div>
<script>
    @auth
        window.user = @json(auth()->user());
        window.amr_data_permission_users= @json($in_permission)
    @endauth

</script>
