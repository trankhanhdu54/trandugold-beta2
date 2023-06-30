<?php

include '../../../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:dangnhap');
};

if(isset($_POST['update'])){

   $id = $_POST['id'];
   $id = filter_var($id, FILTER_SANITIZE_STRING);
   $xid = $_POST['xid'];
   $xid = filter_var($xid, FILTER_SANITIZE_STRING);
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $text = $_POST['text'];
   $text = filter_var($text, FILTER_SANITIZE_STRING);

   $update_congviec = $conn->prepare("UPDATE `congviec` SET id = ?, name = ?, text = ? WHERE id = ?");
   $update_congviec->execute([$xid, $name, $text, $id]);

   $message[] = 'Công việc được cập nhật!';
   header("location:congviec");

      }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Update cong việc</title>
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
                  <h4 class="card-title">Edit Công Việc</h4>
                  <p class="card-description">
                    Form edit công việc
                  </p>
                  <?php
      $update_id = $_GET['update'];
      $show_congviec = $conn->prepare("SELECT * FROM `congviec` WHERE id = ?");
      $show_congviec->execute([$update_id]);
      if($show_congviec->rowCount() > 0){
         while($fetch_congviec = $show_congviec->fetch(PDO::FETCH_ASSOC)){  
   ?>
                      <form action="" method="POST" class="forms-sample" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?= $fetch_congviec['id']; ?>">
                        <div class="form-group">
                          <label class="card-people mt-auto" for="exampleInputName1">#ID hiện thị</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="xid" placeholder="Name" value="<?= $fetch_congviec['id']; ?>">
                          <label class="card-people mt-auto" for="exampleInputName1">Name</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" value="<?= $fetch_congviec['name']; ?>">
                          <label class="card-people mt-auto" for="exampleInputName1">Text</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="text" placeholder="nhập text" value="<?= $fetch_congviec['text']; ?>">
                        </div>
                        <button type="submit" class="btn btn-success mr-2" name="update">Submit</button>
                        <a href="admin-congviec.php" class="btn btn-warning">Cancel</a>
                      </form>
                      <?php
         }
      }else{
         echo '<p class="empty">chưa có công việc nào được thêm vào!</p>';
      }
   ?>
                </div>
              </div>
            </div>
          </div>
        </div>




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