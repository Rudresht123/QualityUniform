<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kwality Uniform - Software</title>

    {{-- links for the css --}}

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.scss') }}">


    <link href="{{ asset('assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/@simonwep/pickr/themes/nano.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datatable.css') }}">

</head>

<body>

    @include('components.loader')
    @include('layouts.off-canvas')

    <div class="page">
        {{-- Header Include --}}
        @include('layouts.header')

        {{-- Side bar Section --}}
        @include('layouts.aside')

        {{-- Main Section Start Here --}}
        <div class="main-content app-content">
            <div class="container-fluid pt-3">

                @yield('content')

            </div>
        </div>

        {{-- Footer section --}}
        {{-- @include('layouts.footer') --}}
    </div>
    {{-- links for the js --}}

    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- Datatable --}}
    <script src="{{ asset('assets/js/datatables/datatableinitalize.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/responsive.dataTables.min.js') }}"></script>


    <script src="{{ asset('assets/js/defaultmenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/sticky.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.js') }}"></script>
    <script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
    <script src="{{ asset('assets/js/defaultmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/sticky.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const togglePassword =
                document.getElementById('togglePassword');

            const passwordInput =
                document.getElementById('password');

            togglePassword.addEventListener('click', function() {

                const icon =
                    this.querySelector('i');

                if (passwordInput.type === 'password') {

                    passwordInput.type = 'text';

                    icon.classList.remove('ti-eye');
                    icon.classList.add('ti-eye-off');

                } else {

                    passwordInput.type = 'password';

                    icon.classList.remove('ti-eye-off');
                    icon.classList.add('ti-eye');
                }

            });

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const loader = document.getElementById("preloader");

            // Hide loader after page load
            window.addEventListener("load", function() {

                if (loader) {
                    loader.style.opacity = "0";
                    loader.style.transition = "opacity 0.4s ease";

                    setTimeout(() => {
                        loader.style.display = "none";
                    }, 400);
                }
            });

            // Show loader on page navigation
            window.addEventListener("beforeunload", function() {

                if (loader) {
                    loader.style.display = "flex";
                    loader.style.opacity = "1";
                }
            });

            // Show loader on form submit
            document.querySelectorAll("form").forEach(function(form) {

                form.addEventListener("submit", function() {

                    if (loader) {
                        loader.style.display = "flex";
                        loader.style.opacity = "1";
                    }
                });

            });

        });
    </script>
</body>

</html>
