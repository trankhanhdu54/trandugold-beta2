<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Slider</title>
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

<style>
  .form-title {
    color: #000000;
    font-size: 1.8rem;
    font-weight: 500;
  }



  .drop-container {
    background-color: #fff;
    position: relative;
    display: flex;
    gap: 10px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 10px;
    margin-top: 2.1875rem;
    border-radius: 10px;
    border: 2px dashed rgb(171, 202, 255);
    color: #444;
    cursor: pointer;
    transition: background .2s ease-in-out, border .2s ease-in-out;
  }

  .drop-container:hover {
    background: rgba(0, 140, 255, 0.164);
    border-color: rgba(17, 17, 17, 0.616);
  }

  .drop-container:hover .drop-title {
    color: #222;
  }

  .drop-title {
    color: #444;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    transition: color .2s ease-in-out;
  }

  #file-input {
    width: 350px;
    max-width: 100%;
    color: #444;
    padding: 2px;
    background: #fff;
    border-radius: 10px;
    border: 1px solid rgba(8, 8, 8, 0.288);
  }

  #file-input::file-selector-button {
    margin-right: 20px;
    border: none;
    background: #084cdf;
    padding: 10px 20px;
    border-radius: 10px;
    color: #fff;
    cursor: pointer;
    transition: background .2s ease-in-out;
  }

  #file-input::file-selector-button:hover {
    background: #0d45a5;
  }
</style>


<?php
include '../../../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
  header('location:../../dangnhap');
}
;


if (isset($_POST['add_slider'])) {

  $name = $_POST['name'];
  $image = $_FILES['image']['name'];
  $image = filter_var($image, FILTER_SANITIZE_STRING);
  $image_size = $_FILES['image']['size'];
  $image_tmp_name = $_FILES['image']['tmp_name'];
  $image_folder = '../../../slider_img/' . $image;

  $select_slider = $conn->prepare("SELECT * FROM `slider` WHERE name = ?");
  $select_slider->execute([$name]);

  if ($select_slider->rowCount() > 0) {
    echo "<script>
              Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'Slider đã tồn tại!',
              })
            </script>";
  } else {
    if ($image_size > 5000000) {
      echo "<script>
      Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'Kích thước ảnh quá lớn!',
      })
    </script>";
    } else {
      move_uploaded_file($image_tmp_name, $image_folder);
      $insert_product = $conn->prepare("INSERT INTO `slider`(name, image) VALUES(?,?)");
      $insert_product->execute([$name, $image]);

      echo "<script>
              Swal.fire({
                icon: 'success',
                title: 'Success...',
                text: 'Thêm Slider thành công!',
              })
            </script>";
    }
  }
}

if (isset($_GET['delete'])) {

  $delete_id = $_GET['delete'];
  $delete_product_image = $conn->prepare("SELECT * FROM `slider` WHERE id = ?");
  $delete_product_image->execute([$delete_id]);
  $fetch_delete_image = $delete_product_image->fetch(PDO::FETCH_ASSOC);
  unlink('../../../slider_img/' . $fetch_delete_image['image']);
  $delete_product = $conn->prepare("DELETE FROM `slider` WHERE id = ?");
  $delete_product->execute([$delete_id]);


  header('location:admin-slider');

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
                <h4 class="card-title">Slider</h4>
                <p class="card-description">
                  Form add slider
                </p>
                <form action="" method="POST" class="forms-sample" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                  </div>
                  <!-- <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="exampleTextarea1" name="text" rows="4"></textarea>
                    </div> -->
                  <!-- <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div> -->
                  <div class="form-group">
                    <!-- <input type="file" name="img[]" class="file-upload-default"> -->
                    <span class="form-title">Upload your file</span>
                    <p class="form-paragraph">
                      File should be an image
                    </p>
                    <label for="file-input" class="drop-container">
                      <span class="drop-title">Drop files here</span>
                      <div class="input-group-append">
                        <input class="file-upload-browse btn btn-primary" type="file" name="image" accept="image/*"
                          required="" id="file-input" class="box">
                      </div>
                    </label>
                  </div>
                  <button type="submit" class="btn btn-success mr-2" name="add_slider">Submit</button>
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
          $show_slider = $conn->prepare("SELECT * FROM `slider` ORDER BY id DESC");
          $show_slider->execute();
          if ($show_slider->rowCount() > 0) {
            while ($fetch_slider = $show_slider->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">#ID:
                      <?= $fetch_slider['id']; ?>
                    </h4>
                    <div class="">
                      <img style="width:200px" src="../../../slider_img/<?= $fetch_slider['image']; ?>" alt="trandugold">
                      <div class="name">Tên Slider :<h3>
                          <?= $fetch_slider['name']; ?>
                        </h3>
                      </div>
                      <div class="flex-btn">
                        <a href="admin-update-slider?update=<?= $fetch_slider['id']; ?>" class="btn btn-warning">Sửa</a>
                        <a href="admin-slider?delete=<?= $fetch_slider['id']; ?>" class="btn btn-danger"
                          onclick="return confirm('Xóa Slider?');">Xóa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          } else {
            echo '<p class="empty">Chưa có Slider được thêm vào!</p>';
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