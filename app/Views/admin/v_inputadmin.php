<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img class="img-profile rounded-circle" src="/assets/images/logo.png" width=50px;>
                </div>
                <div class="sidebar-brand-text mx-3"> Princess Solution <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Kursus</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Keseluruhan:</h6>
                        <a class="collapse-item" href="/seluruhsiswa">Data Seluruh Siswa</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Data per Instruktur:</h6>
                        <a class="collapse-item" href="/hendri">Siswa Hendri</a>
                        <a class="collapse-item" href="/suhadi">Siswa Suhadi</a>
                        <a class="collapse-item" href="/yono">Siswa Yono</a>
                        <a class="collapse-item" href="/eko">Siswa Eko</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Admin</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Admin:</h6>
                        <a class="collapse-item" href="/inputadmin">Tambah Data Admin</a>
                        <a class="collapse-item" href="/lihatadmin">Lihat Data Admin</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/jadwal">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Jadwal</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mr-auto static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-5">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Navbar -->
                    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800"><?php echo ucwords($nama) ?></span>
                                <i class="fa fa-user mr-2 text-gray-800"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div id="container">
                        <h1>Tambah Data Admin<br></br></h1>

                        <div id="body">
                            <form action="/storeadmin" method="post">
                                <table border="0" cellpadding="12" cellspacing="5">
                                    <tr>
                                        <td>Username</td>
                                        <td class="col-sm-6"><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="username" autocomplete="off" required></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td class="col-sm-6"><input type="password" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="password" autocomplete="off" required></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td class="col-sm-6"><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="nama" autocomplete="off" required></td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td class="col-sm-6">
                                            <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="admin" id="admin" required>
                                                <option selected="true" value="" disabled selected>Pilih...</option>
                                                <option value="AdminModel" id="Admin">Admin</option>
                                                <option value="SuperModel" id="Super">Super Admin</option>
                                                <option value="ValidatorModel" id="Validator">Validator</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <input type="hidden" name="role" id="role" value="">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input class="btn btn-info btn-md" style="float:right" type="submit" value="          Save          "></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <script>
                    document.getElementById('admin').onchange = function() {
                        if (this.value == 'AdminModel') {
                            document.getElementById('role').value = "Admin";
                        } else if (this.value == 'SuperModel') {
                            document.getElementById('role').value = "Super";
                        } else {
                            document.getElementById('role').value = "Validator";
                        }
                    }
                </script>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>

<?php $this->endSection(); ?>