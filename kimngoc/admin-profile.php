<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Profile</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="../sweetalert2/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="../sweetalert2/dist/sweetalert2.min.css">



</head>
<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:dangnhap');
}

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);

   if(!empty($name)){
      $select_name = $conn->prepare("SELECT * FROM `admin` WHERE name = ?");
      $select_name->execute([$name]);
      if($select_name->rowCount() > 0){
         $message[] = 'tên người dùng đã được sử dụng!';
      }else{
         $update_name = $conn->prepare("UPDATE `admin` SET name = ? WHERE id = ?");
         $update_name->execute([$name, $admin_id]);
      }
   }

   $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
   $select_old_pass = $conn->prepare("SELECT password FROM `admin` WHERE id = ?");
   $select_old_pass->execute([$admin_id]);
   $fetch_prev_pass = $select_old_pass->fetch(PDO::FETCH_ASSOC);
   $prev_pass = $fetch_prev_pass['password'];
   $old_pass = sha1($_POST['old_pass']);
   $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);
   $new_pass = sha1($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $confirm_pass = sha1($_POST['confirm_pass']);
   $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

   if($old_pass != $empty_pass){
      if($old_pass != $prev_pass){
         $message[] = 'mật khẩu cũ không khớp!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'xác nhận mật khẩu không khớp!';
      }else{
         if($new_pass != $empty_pass){
            $update_pass = $conn->prepare("UPDATE `admin` SET password = ? WHERE id = ?");
            $update_pass->execute([$confirm_pass, $admin_id]);
            $message[] = 'Đã cập nhật mật khẩu thành công!';
         }else{
            $message[] = 'vui lòng nhập mật khẩu mới!';
         }
      }
   }

}

?>


<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <?php include 'admin/top-admin.php'; ?>
    <!-- partial -->

    <?php include 'admin/todo-admin.php'; ?>

    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <?php include 'admin/menu-admin.php'; ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Profile</h4>
                <p class="card-description">
                  Form edit Profile
                </p>
                <form action="" method="POST" class="forms-sample" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="new_name" placeholder="Name" value="<?php echo ($_SESSION['ten']); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Pass cũ</label>
                    <input type="password" class="form-control" id="exampleInputName1" name="old_pass" oninput="this.value = this.value.replace(/\s/g, '')">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Pass mới</label>
                    <input type="password" class="form-control" id="exampleInputName1" name="new_pass" oninput="this.value = this.value.replace(/\s/g, '')">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Nhập lại Pass mới</label>
                    <input type="password" class="form-control" id="exampleInputName1" name="confirm_pass" oninput="this.value = this.value.replace(/\s/g, '')">
                  </div>
                  
                  <button type="submit" class="btn btn-success mr-2" name="submit">Submit</button>
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

      <!-- </div> -->



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
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->



</body>



</html>