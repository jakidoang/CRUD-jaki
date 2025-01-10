<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/hyper/saas/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 10:21:55 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Datatables | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="{{asset('backend/assets/css/vendor/dataTables.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/vendor/responsive.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/vendor/buttons.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/vendor/select.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/vendor/fixedHeader.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/vendor/fixedColumns.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>

    </head>

    <body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" height="26">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('backend/assets/images/logo_sm_dark.png')}}" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('backend/assets/images/logo_sm_dark.png')}}" alt="" height="16">
                    </span>
                </a>

                <div class="h-100" id="leftside-menu-container" data-simplebar>

                    <!--- Sidemenu -->
<ul class="side-nav">
    <li class="side-nav-item">
        <a href="{{route('roles.index')}}" class="side-nav-link">
            <i class="mdi mdi-shield-account"></i>
            <span> Role </span>
        </a>
    </li>
    <li class="side-nav-item">
        <a href="{{route('users.index')}}" class="side-nav-link">
            <i class="mdi mdi-account-multiple"></i>
            <span> User </span>
        </a>
    </li>
    <li class="side-nav-item">
        <a href="{{route('profiles.index')}}" class="side-nav-link">
            <i class="mdi mdi-account-box"></i>
            <span> Profile </span>
        </a>
    </li>
</ul>


                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">


                            {{-- <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <!-- Menampilkan avatar pengguna yang sedang login -->
                                        <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('backend/assets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <!-- Menampilkan nama pengguna yang sedang login -->
                                        <span class="account-user-name">{{ Auth::user()->name }}</span>
                                        <!-- Menampilkan posisi pengguna, misalnya "Founder" -->
                                        <span class="account-position">{{ Auth::user()->role ?? 'User' }}</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item Logout -->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>

                                    <!-- Form Logout -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}


                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">


                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-notes font-16 me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-life-ring font-16 me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-cog font-16 me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex">
                                            <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Erwin Brown</h5>
                                                <span class="font-12 mb-0">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex">
                                            <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="font-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">

                        @yield('content')


                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>


                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>


                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                            class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->
        <!-- bundle -->
        <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/app.min.js')}}"></script>

        <script src="{{asset('backend/assets/js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/buttons.flash.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/buttons.print.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/dataTables.select.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/fixedColumns.bootstrap5.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/vendor/fixedHeader.bootstrap5.min.js')}}"></script>
        <!-- third party js ends -->

        <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

        <!-- demo app -->
        <script src="{{asset('backend/assets/js/pages/demo.datatable-init.js')}}"></script>
        <!-- end demo js-->

        {{-- Sweet Alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @stack('js')

    </body>

<!-- Mirrored from coderthemes.com/hyper/saas/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 10:22:01 GMT -->
</html>
