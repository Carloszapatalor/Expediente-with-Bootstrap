<!DOCTYPE html>
<html lang="es">

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <x-layout.left-sidebar />
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <x-layout.top-bar />
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    {{ $slot }}
                    <!-- End Content Row -->
                </div>
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <x-layout.footer />
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!--End Scroll to Top Button-->
    <!-- Logout Modal-->
    <x-layout.logout_modal />
    <!--End Logout Modal-->
    <x-layout.js />

</body>

</html>
