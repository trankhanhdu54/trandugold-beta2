<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Công Việc</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />

  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../../../sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="../../../sweetalert2/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="../../../sweetalert2/dist/sweetalert2.min.css">



</head>
<?php

include '../../../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
  header('location:dangnhap');
}
;

if (isset($_POST['add_congviec'])) {

  $name = $_POST['name'];
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $text = $_POST['text'];
  $text = filter_var($text, FILTER_SANITIZE_STRING);

  $select_congviec = $conn->prepare("SELECT * FROM `congviec` WHERE name = ?");
  $select_congviec->execute([$name]);

  if ($select_congviec->rowCount() > 0) {
    $message[] = 'Tên Công việc đã tồn tại!';
  } else {

    $insert_congviec = $conn->prepare("INSERT INTO `congviec`(name, text) VALUES(?,?)");
    $insert_congviec->execute([$name, $text]);

    $message[] = 'Công việc mới được thêm vào!';
  }
}




if (isset($_GET['delete'])) {

  $delete_id = $_GET['delete'];
  $delete_congviec_image = $conn->prepare("SELECT * FROM `congviec` WHERE id = ?");
  $delete_congviec_image->execute([$delete_id]);
  $delete_congviec = $conn->prepare("DELETE FROM `congviec` WHERE id = ?");
  $delete_congviec->execute([$delete_id]);

  header('location:admin-congviec');

}

?>


<body>
  <div class="container-scroller">

    <!-- partial:../../partials/_navbar.html -->
    <?php include '../top-admin.php'; ?>
    <!-- partial -->

    <?php include '../todo-admin.php'; ?>

    <!-- partial -->
    <!-- partial:../../partials/_sidebar.html -->
    <?php include '../menu-admin.php'; ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Công Việc</h4>
                <p class="card-description">
                  Form add công việc
                </p>
                <form action="" method="POST" class="forms-sample" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Textarea</label>
                    <textarea class="form-control" id="exampleTextarea1" name="text" rows="4"></textarea>
                  </div>
                  <button type="submit" class="btn btn-success mr-2" name="add_congviec">Submit</button>
                  <!-- <button class="btn btn-light">Cancel</button> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- add products section ends -->

      <!-- show products section starts  -->

      <!-- <div class="main-panel"> -->
      <div class="content-wrapper">
        <div class="row">
          <?php
          $show_congviec = $conn->prepare("SELECT * FROM `congviec`");
          $show_congviec->execute();
          if ($show_congviec->rowCount() > 0) {
            while ($fetch_congviec = $show_congviec->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">#ID:
                      <?= $fetch_congviec['id']; ?>
                    </h4>
                    <div class="">
                      <!-- <img style="width:200px" src="../../../slider_img/gold.png" alt="trandugold"> -->
                      <div class="name">Tên công việc :<h3>
                          <?= $fetch_congviec['name']; ?>
                        </h3>
                      </div>
                      <div class="name">Text :<h3>
                          <?= $fetch_congviec['text']; ?>
                        </h3>
                      </div>
                      <div class="flex-btn">
                        <a href="admin-update-congviec?update=<?= $fetch_congviec['id']; ?>" class="btn btn-warning">Sửa</a>
                        <a href="admin-congviec?delete=<?= $fetch_congviec['id']; ?>" class="btn btn-danger"
                          onclick="return confirm('Xóa chứ?');">Xóa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          } else {
            echo '<p class="empty">Chưa có công việc được thêm vào!</p>';
          }
          ?>
        </div>
      </div>
      <!-- </div> -->



      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      <?php include '../footer.php'; ?>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->



</body>



</html>