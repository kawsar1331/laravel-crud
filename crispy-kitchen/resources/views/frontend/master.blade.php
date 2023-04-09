<!-- Header -->
@include('frontend.layouts.header')

<!-- Navbar -->
        @include('frontend.layouts.navbar')
        
        <main>
                @yield('main-content')
        </main>

<!-- Footer -->
@include('frontend.layouts.footer')