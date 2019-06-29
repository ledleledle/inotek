<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'partials/head.php'; ?>
  <title>Belajar English - Pilih Level</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'partials/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'partials/navbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pilih Level</h1>
          </div>

          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <a href="stt/index.html?id=1">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Level</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Easy</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-smile-beam fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <a href="stt/index.html?id=2">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Level</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Medium</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-smile fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <a href="stt/index.html?id=3">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Level</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Hard</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-skull fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <a href="stt/index.html?id=4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Level</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Very Hard</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-skull-crossbones fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div>

          <div class="row">

            <div class="col-lg-12">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Info</h6>
                </div>
                <div class="card-body">
                  Setelah anda memilih level. Kata akan keluar dan mulailah berbicara! Setelah suara terdeteksi, nilai prosentase kecocokan suara akan ditampilkan.
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'partials/footer.php'; ?>
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
  <?php include 'partials/js.php'; ?>
</body>

</html>
