<!--
=========================================================
* Corporate UI - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/corporate-ui
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/../assets/img/favicon.png">
    <link rel="stylesheet" href="/css/lib/css/normalize.css">
    <link rel="stylesheet" href="/css/lib/css/bootstrap.css">
    <link rel="stylesheet" href="/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/css/lib/datatable/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="/css/lib/datatable/buttons.dataTables.min.css">
    <title>@yield('title', 'Pendaftaran')</title>

    <!--     Fonts and icons     -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
        rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
    <link href="/../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/../assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="" style="background-color: #1e293b;">
    {{-- Sidebar --}}
    {{-- @include('layouts.sidebar') --}}
    {{-- End Sidebar --}}
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        {{-- @include('layouts.navbar') --}}
        @yield('content')

    </main>

    <!--   Core JS Files   -->
    <script src="/../assets/js/core/popper.min.js"></script>
    <script src="/../assets/js/core/bootstrap.min.js"></script>
    <script src="/../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/../assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>

    {{-- datatables --}}
    <script src="/js/lib/data-table/datatables.min.js"></script>
    <script src="/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="/js/lib/data-table/jszip.min.js"></script>
    <script src="/js/lib/data-table/vfs_fonts.js"></script>
    <script src="/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="/js/lib/data-table/buttons.print.min.js"></script>
    <script src="/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="/js/init/datatables-init.js"></script>
    <script src="/js/multiinsert.js"></script>
    <script src="/js/jquerydua.js"></script>

    <script src="https://cdn.tiny.cloud/1/API-KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</body>

</html>
