<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
       {{--  @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        <!-- Styles -->
        {{-- @livewireStyles --}}

        <!-- Custom styles for this template-->
        <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    
        <!-- CSS Dynamic -->
        @if (trim($__env->yieldContent('page-styles')))    
            @yield('page-styles')
        @endif
    </head>
    <body class="font-sans antialiased" style="background-color: #f7f8fa;">
        <div id="wrapper">

            <!-- Sidebar -->
            @include('layouts.sidebar')
    
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column" style="margin-top: 5rem; margin-left: 4rem;">
                
                <!-- Main Content -->
                <div id="content" class="main">
                    
                    <!-- Topbar -->
                    @include('layouts.topbar')
    
                    <!-- Page Content -->
                    @yield('content')
                        
                </div><!-- /.container-fluid -->
            </div><!-- End of Main Content -->
        </div><br><br><br><br><br>
    
        <!-- Footer -->
        @include('layouts.footer')
    
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
            
        <!-- Js -->
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
    
        <!-- Scripts Dynamic-->
        @if (trim($__env->yieldContent('page-script')))
            @yield('page-script')
        @endif

        {{-- <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts --}}
    </body>
</html>
