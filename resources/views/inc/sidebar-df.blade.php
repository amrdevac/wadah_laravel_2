@php
$in_sidebar = [
    [
        'nama_sidebar' => 'Sidebar',
        'icon_sidebar' => 'fa-align-left',
        'route' => [
            [
                'route_url' => '/kelola-sidebar',
                'nama_sub_sidebar' => 'Daftar Sidebar',
            ],
            [
                'route_url' => '/kelola-sidebar/create',
                'nama_sub_sidebar' => 'Tambah Sidebar',
            ],
        ],
    ],
    [
        'nama_sidebar' => 'Akses User',
        'icon_sidebar' => 'fa-cogs',
        'route' => [
            [
                'route_url' => '/role',
                'nama_sub_sidebar' => 'Daftar Role',
            ],
            [
                'route_url' => '/permission',
                'nama_sub_sidebar' => 'Daftar Permission',
            ],
        ],
    ],
];

@endphp

<aside class="main-sidebar sidebar-light-lime ">
    <a href="#" class="brand-link">
        {{-- <img src="/file/default/amr.png " class="img-circle align-middle" alt="User Image"> --}}
        <img src="/file/default/amr.png" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text font-weight-bolder">AMR APP</span>
    </a>
    <div class="sidebar">
        @auth
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image " style="align-self: center;">
                    <i class="fa fa-user-circle img-circle align-middle fa-2x" aria-hidden="true"></i>
                    <img src="/file/default/amr.png " class="img-circle align-middle" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block font-weight-bolder"> {{ substr(auth()->user()->nama, 0, 15) }} </a>
                    <small class="d-block  badge badge-dark font-weight-bold">
                        {{ auth()->user()->username }}
                    </small>
                </div>
            </div>
        @endauth
        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <router-link to="/" class="nav-link text-gray">
                        <i class="nav-icon fa fa-home  "></i>
                        <p>
                            Halaman Utama
                        </p>
                    </router-link>
                </li>

                @foreach ($in_sidebar as $data_sidebar)
                    @if (count($data_sidebar['route']) != 0)
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link text-gray ">
                                <i class="nav-icon fa {{ $data_sidebar['icon_sidebar'] }} "></i>
                                <p>
                                    {{ $data_sidebar['nama_sidebar'] }}
                                    <i class="right fa fa-angle-left"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                @foreach ($data_sidebar['route'] as $route)
                                    <li class="nav-item ">
                                        {{-- {{ $route['route_url'] }} --}}
                                        <router-link :to="{name:'{{ $route['route_url'] }}'}"
                                            class="nav-link text-gray">
                                            <p>{{ $route['nama_sub_sidebar'] }}</p>
                                        </router-link>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach




                @auth
                    <li class="nav-item">
                        <a href=" {{ route('logout') }} " class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
                            <i class="nav-icon fa fa-power-off text-danger"></i>
                            <p>
                                Logout
                            </p>
                            <form action=" {{ route('logout') }} " id="logoutForm" method="POST">
                                @csrf
                            </form>
                        </a>
                    </li>
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
