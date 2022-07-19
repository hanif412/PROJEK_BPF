<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<body class="g-sidenav-show  bg-gray-100">
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/') ?>table/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('assets/') ?>table/assets/img/favicon.png">
  <title>
    Hanif
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('assets/') ?>table/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url('assets/') ?>table/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= base_url('assets/') ?>table/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('assets/') ?>table/assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Purchase History</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <?= $this->session->flashdata('message'); ?>
                <table class="table align-items-center mb-0" id="table1">
                  <thead>
                    <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Purchase</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                    <?php foreach ($pembelian as $us) : ?>
                    <tr>
                    <td class="align-middle text-center"> 
                        <p class="text-xs font-weight-bold mb-0 "> <?= $i; ?>.</p>
                        </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0"><?= $us['no_penjualan']; ?></p>
                        
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0"><?= $us['tanggal']; ?></p> 
                      </td>
                      
                      <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0">$ <?= $us['total_bayar']; ?></p>
                      </td>
                      
                     
                      <td>
                        <span class="badge badge-sm bg-gradient-secondary"><?= $us['status']; ?></span>
                      </td>
                      <td class="align-middle text-center">
                      <a href="<?= base_url('Profil/statusbeli/') . $us['no_penjualan']; ?>" class="btn btn-primary mb-2">Detail</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    
                    
                    
                
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/') ?>table/assets/js/core/popper.min.js"></script>
  <script src="<?= base_url('assets/') ?>table/assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/') ?>table/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url('assets/') ?>table/assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/') ?>table/assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>