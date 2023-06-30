<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product</title>
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
    header('location:dangnhap');
}
;

if (isset($_POST['add_sanpham'])) {

    $name = $_POST['name'];
    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];
    $text3 = $_POST['text3'];
    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../../../mid_img/' . $image;

    $select_mid = $conn->prepare("SELECT * FROM `sanpham` WHERE name = ?");
    $select_mid->execute([$name]);

    if ($select_mid->rowCount() > 0) {
        $message[] = 'Sản phẩm đã tồn tại!';
    } else {
        if ($image_size > 5000000) {
            $message[] = 'Kích thước hình ảnh quá lớn';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);

            $insert_product = $conn->prepare("INSERT INTO `sanpham`(name, text1, text2, text3, image) VALUES(?,?,?,?,?)");
            $insert_product->execute([$name, $text1, $text2, $text3, $image]);

            $message[] = 'Sản phẩm mới được thêm vào!';
        }

    }

}

if (isset($_GET['delete'])) {

    $delete_id = $_GET['delete'];
    $delete_product_image = $conn->prepare("SELECT * FROM `sanpham` WHERE id = ?");
    $delete_product_image->execute([$delete_id]);
    $fetch_delete_image = $delete_product_image->fetch(PDO::FETCH_ASSOC);
    unlink('../../../mid_img/' . $fetch_delete_image['image']);
    $delete_product = $conn->prepare("DELETE FROM `sanpham` WHERE id = ?");
    $delete_product->execute([$delete_id]);

    header('location:admin-sanpham');

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
                                <h4 class="card-title">Product</h4>
                                <p class="card-description">
                                    Form add Product
                                </p>
                                <form action="" method="POST" class="forms-sample" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Sản phẩm</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="name"
                                            placeholder="Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleTextarea1">Textarea</label>
                                        <textarea class="form-control" id="exampleTextarea1" name="text1"
                                            rows="4"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleTextarea1">Textarea</label>
                                        <textarea class="form-control" id="exampleTextarea1" name="text2"
                                            rows="4"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleTextarea1">Textarea</label>
                                        <textarea class="form-control" id="exampleTextarea1" name="text3"
                                            rows="4"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <!-- <input type="file" name="img[]" class="file-upload-default"> -->
                                        <span class="form-title">Upload your file</span>
                                        <p class="form-paragraph">
                                            File should be an image
                                        </p>
                                        <label for="file-input" class="drop-container">
                                            <span class="drop-title">Drop files here</span>
                                            <div class="input-group-append">
                                                <input class="file-upload-browse btn btn-primary" type="file"
                                                    name="image" accept="image/*" required="" id="file-input"
                                                    class="box">
                                            </div>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-success mr-2"
                                        name="add_sanpham">Submit</button>
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
                    $show_sanpham = $conn->prepare("SELECT * FROM `sanpham` ORDER BY id DESC");
                    $show_sanpham->execute();
                    if ($show_sanpham->rowCount() > 0) {
                        while ($fetch_sanpham = $show_sanpham->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">#ID:
                                            <?= $fetch_sanpham['id']; ?>
                                        </h4>
                                        <div class="">
                                            <img style="width:200px" src="../../../mid_img/<?= $fetch_sanpham['image']; ?>"
                                                alt="trandugold">
                                            <div class="name">Tên Product :<h3>
                                                    <?= $fetch_sanpham['name']; ?>
                                                </h3>
                                            </div>

                                            <div class="text-muted">Text 1 :<h5>
                                                    <?= $fetch_sanpham['text1']; ?>
                                                </h5>
                                            </div>

                                            <div class="text-muted">Text 2 :<h5>
                                                    <?= $fetch_sanpham['text2']; ?>
                                                </h5>
                                            </div>

                                            <div class="text-muted">Text 3 :<h5>
                                                    <?= $fetch_sanpham['text3']; ?>
                                                </h5>
                                            </div>

                                            <div class="flex-btn">
                                                <a href="admin-update-sanpham?update=<?= $fetch_sanpham['id']; ?>"
                                                    class="btn btn-warning">Sửa</a>
                                                <a href="admin-sanpham?delete=<?= $fetch_sanpham['id']; ?>"
                                                    class="btn btn-danger" onclick="return confirm('Xóa Product?');">Xóa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo '<p class="empty">Chưa có gì được thêm vào!</p>';
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