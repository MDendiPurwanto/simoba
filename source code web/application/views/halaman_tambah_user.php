<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>DATA USER || SIMOBA</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>aset/css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="<?php echo base_url(); ?>">SIMOBA
      <br>
      <h6>Sistem Monitoring Banjir</h6>
    </a>

    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-logout"></i></button>
                </div> -->
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-1 me-lg-1">
      <a href="<?php echo base_url(); ?>" class="btn btn-primary" type="button">LOG OUT <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Administrator</div>
            <a class="nav-link" href="<?php echo base_url('datauser'); ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
              Data User
            </a>
            <a class="nav-link" href="<?php echo base_url('databanjir'); ?>">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-water"></i></div>
              Data Banjir
            </a>
            <a class="nav-link" href="<?php echo base_url('datagrafik'); ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-line"></i></div>
                                Data Grafik
                            </a>
            <a class="nav-link" href="<?php echo base_url('about'); ?>l">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-water"></i></div>
              About
            </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          SIMOBA
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <!-- konten-->
          <h1 class="mt-4">Halaman Tambah User</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Data User</li>
          </ol>
          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
          <form action="<?php echo base_url() . 'Datauser/tambah_aksi'; ?>" method="post">
            <div class="form-group">
              <label for="nama">Nama User</label>
              <input type="text" class="form-control" id="nama" name="nama" aria-describedby="Usernama" placeholder="Masukan Nama Instansi">
            </div>
            <br>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
            </div>
            <br>
            <div class="form-group">
              <label for="status">Status</label>
              <input type="Number" class="form-control" id="status" name="status" placeholder="Masukan User">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" value="tambah">Tambah User</button>
          </form>
          <div class="row">
          </div>
        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; SIMOBA - Sistem Monitoring Banjir 2022</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="sidebars.js"></script>
  <script>
    $(document).ready(function() {
      var table = $('#example').DataTable({
        responsive: true
      });

      new $.fn.dataTable.FixedHeader(table);
    });
  </script>

  <script href="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script href="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js"></script>
  <script href="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
  <script href="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
  <script href="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url() ?>aset/js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url() ?>aset/assets/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url() ?>aset/assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="<?php echo base_url() ?>aset/js/datatables-simple-demo.js"></script>
</body>

</html>