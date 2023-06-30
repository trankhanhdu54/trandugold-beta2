<?php
$date = getdate();
include '../components/connect.php';
ob_start();
session_start();




$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
  header('location:dangnhap');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TranDuGold Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <?php include 'admin/todo-admin.php'; ?>
  <?php include 'admin/menu-admin.php'; ?>


  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">Hello !
                <?php echo ($_SESSION['ten']); ?>
                <h6 class="font-weight-normal mb-0"><span class="text-primary">How are you?</span></h6>
            </div>
            <div class="col-12 col-xl-4">
              <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="mdi mdi-calendar"></i> Today
                    <?php echo ": " . $date['mday'] . "- " . $date['mon'] . "- " . $date['year'] . ""; ?>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg">
            <div class="card-people mt-auto">
              <img src="images/dashboard/people.svg" alt="people">
              <div class="weather-info">
                <div class="d-flex">
                  <div>
                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>30<sup>C</sup></h2>
                  </div>
                  <div class="ml-2">
                    <h4 class="location font-weight-normal">Cần Thơ</h4>
                    <h6 class="font-weight-normal">Việt Nam</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
        $select_noidung = $conn->prepare("SELECT * FROM `noidung`");
        $select_noidung->execute();
        $numbers_of_noidung = $select_noidung->rowCount();

        $select_congviec = $conn->prepare("SELECT * FROM `congviec`");
        $select_congviec->execute();
        $numbers_of_congviec = $select_congviec->rowCount();

        $select_sanpham = $conn->prepare("SELECT * FROM `sanpham`");
        $select_sanpham->execute();
        $numbers_of_sanpham = $select_sanpham->rowCount();

        $select_messages = $conn->prepare("SELECT * FROM `messages`");
        $select_messages->execute();
        $numbers_of_messages = $select_messages->rowCount();
        ?>
        <div class="col-md-6 grid-margin transparent">
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body">
                  <p class="mb-4">Nội dung</p>
                  <p class="fs-30 mb-2">
                    <?= $numbers_of_noidung; ?>
                  </p>

                </div>
              </div>
            </div>


            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-dark-blue">
                <div class="card-body">
                  <p class="mb-4">Công việc</p>
                  <p class="fs-30 mb-2">
                    <?= $numbers_of_congviec; ?>
                  </p>
                  <p>22.00% (30 days)</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-blue">
                <div class="card-body">
                  <p class="mb-4">Sản phẩm</p>
                  <p class="fs-30 mb-2">
                    <?= $numbers_of_sanpham; ?>
                  </p>
                  <p>2.00% (30 days)</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 stretch-card transparent">
              <div class="card card-light-danger">
                <div class="card-body">
                  <p class="mb-4">Tin nhắn</p>
                  <p class="fs-30 mb-2">
                    <?= $numbers_of_messages; ?>
                  </p>
                  <p>0.22% (30 days)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">

        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Order Details</p>
              <p class="font-weight-500">The total number of sessions within the date range. It is the period time a
                user is actively engaged with your website, page or app, etc</p>

              <div class="d-flex flex-wrap mb-5">
                <div class="mr-5 mt-3">
                  <p class="text-muted">Order value</p>
                  <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                </div>

                <div class="mr-5 mt-3">
                  <p class="text-muted">Orders</p>
                  <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                </div>

                <div class="mr-5 mt-3">
                  <p class="text-muted">Users</p>
                  <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                </div>

                <div class="mt-3">
                  <p class="text-muted">Downloads</p>
                  <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
                </div>

              </div>
              <canvas id="order-chart"></canvas>
            </div>
          </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="card-title">Sales Report</p>
                <a href="#" class="text-info">View all</a>
              </div>
              <p class="font-weight-500">The total number of sessions within the date range. It is the period time a
                user is actively engaged with your website, page or app, etc</p>
              <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
              <canvas id="sales-chart"></canvas>
            </div>
          </div>
        </div>
      </div>




      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card position-relative">
            <div class="card-body">
              <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                        <div class="ml-xl-4 mt-3">
                          <p class="card-title">Detailed Reports</p>
                          <h1 class="text-primary">$34040</h1>
                          <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                          <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period
                            time a user is actively engaged with your website, page or app, etc</p>
                        </div>
                      </div>
                      <div class="col-md-12 col-xl-9">
                        <div class="row">
                          <div class="col-md-6 border-right">
                            <div class="table-responsive mb-3 mb-md-0 mt-3">
                              <table class="table table-borderless report-table">
                                <tr>
                                  <td class="text-muted">Illinois</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">713</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-muted">Washington</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">583</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-muted">Mississippi</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: 95%"
                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">924</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-muted">California</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-info" role="progressbar" style="width: 60%"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">664</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-muted">Maryland</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">560</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-muted">Alaska</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    <h5 class="font-weight-bold mb-0">793</h5>
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-6 mt-3">
                            <canvas id="north-america-chart"></canvas>
                            <div id="north-america-legend"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title mb-0">Lately year</p>
              <div class="table-responsive">
                <table class="table table-striped table-borderless">
                  <thead>
                    <tr>
                      <th>Headline</th>
                      <th>Location</th>
                      <th>Text</th>
                      <th>Year</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $select_orders = $conn->prepare("SELECT * FROM `noidung` ORDER BY id DESC LIMIT 6;");
                    $select_orders->execute();
                    if ($select_orders->rowCount() > 0) {
                      while ($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr>
                          <td><?= $fetch_orders['name']; ?></td>
                          <td class="font-weight-bold"><?= $fetch_orders['namelink']; ?></td>
                          <td><?= $fetch_orders['text']; ?></td>
                          <td class="font-weight-medium">
                            <div class="badge badge-success"><?= $fetch_orders['nam']; ?></div>
                          </td>
                        </tr>
                        <?php
                      }
                    } else {
                      echo '<p class="empty">chưa có nội dung nào!</p>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title mb-0">Projects</p>
                <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th class="pl-0  pb-2 border-bottom">Places</th>
                        <th class="border-bottom pb-2">Orders</th>
                        <th class="border-bottom pb-2">Users</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pl-0">Kentucky</td>
                        <td>
                          <p class="mb-0"><span class="font-weight-bold mr-2">65</span>(2.15%)</p>
                        </td>
                        <td class="text-muted">65</td>
                      </tr>
                      <tr>
                        <td class="pl-0">Ohio</td>
                        <td>
                          <p class="mb-0"><span class="font-weight-bold mr-2">54</span>(3.25%)</p>
                        </td>
                        <td class="text-muted">51</td>
                      </tr>
                      <tr>
                        <td class="pl-0">Nevada</td>
                        <td>
                          <p class="mb-0"><span class="font-weight-bold mr-2">22</span>(2.22%)</p>
                        </td>
                        <td class="text-muted">32</td>
                      </tr>
                      <tr>
                        <td class="pl-0">North Carolina</td>
                        <td>
                          <p class="mb-0"><span class="font-weight-bold mr-2">46</span>(3.27%)</p>
                        </td>
                        <td class="text-muted">15</td>
                      </tr>
                      <tr>
                        <td class="pl-0">Montana</td>
                        <td>
                          <p class="mb-0"><span class="font-weight-bold mr-2">17</span>(1.25%)</p>
                        </td>
                        <td class="text-muted">25</td>
                      </tr>
                      <tr>
                        <td class="pl-0">Nevada</td>
                        <td>
                          <p class="mb-0"><span class="font-weight-bold mr-2">52</span>(3.11%)</p>
                        </td>
                        <td class="text-muted">71</td>
                      </tr>
                      <tr>
                        <td class="pl-0 pb-0">Louisiana</td>
                        <td class="pb-0">
                          <p class="mb-0"><span class="font-weight-bold mr-2">25</span>(1.32%)</p>
                        </td>
                        <td class="pb-0">14</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title mb-0" style="padding-bottom:15px;">Message</p>
                <ul class="icon-data-list">
                  <?php
                  $select_account = $conn->prepare("SELECT * FROM `messages` ORDER BY id DESC LIMIT 4");
                  $select_account->execute();
                  if ($select_account->rowCount() > 0) {
                    while ($fetch_accounts = $select_account->fetch(PDO::FETCH_ASSOC)) {
                      ?>
                      <li>
                        <div class="d-flex">
                          <img src="images/faces/face1.jpg" alt="user">
                          <div>
                            <p class="text-info mb-1">
                              <?= $fetch_accounts['name']; ?>
                            </p>
                            <p class="mb-0">
                              <?= $fetch_accounts['message']; ?>
                            </p>
                            <small>9:30 am</small>
                          </div>
                        </div>
                      </li>
                      <?php
                    }
                  } else {
                    echo '<p class="empty">Chưa có ai nhắn gì cả ~~!</p>';
                  }
                  ?>

                </ul>
              </div>
            </div>
          </div>





          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include 'pages/footer.php'; ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->

    <!-- icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>