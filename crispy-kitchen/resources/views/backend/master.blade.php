@include('backend.layouts.header')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.layouts.sidenav')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('backend.layouts.topnav')
                <!-- End of Topbar -->
                
                <!-- Changable Content -->
                @yield('main-content')


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('backend.layouts.copyright')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

@include('backend.layouts.footer')
