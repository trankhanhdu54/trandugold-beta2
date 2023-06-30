<?php

include '../../../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:dangnhap');
}
;

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $id = filter_var($id, FILTER_SANITIZE_STRING);
    $xid = $_POST['xid'];
    $xid = filter_var($xid, FILTER_SANITIZE_STRING);
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $text1 = $_POST['text1'];
    $text1 = filter_var($text1, FILTER_SANITIZE_STRING);
    $text2 = $_POST['text2'];
    $text2 = filter_var($text2, FILTER_SANITIZE_STRING);
    $text3 = $_POST['text3'];
    $text3 = filter_var($text3, FILTER_SANITIZE_STRING);

    $update_category = $conn->prepare("UPDATE `sanpham` SET id = ?, text1 = ?, text2 = ?, text3 = ?, name = ? WHERE id = ?");
    $update_category->execute([$xid, $name, $text1, $text2, $text3, $id]);

    $message[] = 'Đã được cập nhật!';
    header('location:admin-sanpham.php');

    $old_image = $_POST['old_image'];
    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../../../mid_img/' . $image;

    if (!empty($image)) {
        if ($image_size > 5000000) {
            $message[] = 'kích thước hình ảnh quá lớn!';
        } else {
            $update_image = $conn->prepare("UPDATE `sanpham` SET image = ? WHERE id = ?");
            $update_image->execute([$image, $id]);
            move_uploaded_file($image_tmp_name, $image_folder);
            unlink('../../../mid_img/' . $old_image);
            $message[] = 'Hình ảnh được cập nhật!';
        }
    }

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Product</title>
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
                                <h4 class="card-title">Edit Product</h4>
                                <p class="card-description">
                                    Form edit Product
                                </p>
                                <?php
                                $update_id = $_GET['update'];
                                $show_sanpham = $conn->prepare("SELECT * FROM `sanpham` WHERE id = ?");
                                $show_sanpham->execute([$update_id]);
                                if ($show_sanpham->rowCount() > 0) {
                                    while ($fetch_sanpham = $show_sanpham->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                        <form action="" method="POST" class="forms-sample" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?= $fetch_sanpham['id']; ?>">
                                            <input type="hidden" name="name" value="<?= $fetch_sanpham['name']; ?>">
                                            <input type="hidden" name="old_image" value="<?= $fetch_sanpham['image']; ?>">
                                            <img style="width:200px" src="../../../mid_img/<?= $fetch_sanpham['image']; ?>"
                                                alt="">
                                            <div class="form-group">
                                                <label class="card-people mt-auto" for="exampleInputName1">#ID</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="xid"
                                                    placeholder="Name" value="<?= $fetch_sanpham['id']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label class="card-people mt-auto" for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="name"
                                                    placeholder="Name" value="<?= $fetch_sanpham['name']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label class="card-people mt-auto" for="exampleInputName1">Text1</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="text1"
                                                    placeholder="Text1" value="<?= $fetch_sanpham['text1']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label class="card-people mt-auto" for="exampleInputName1">Text2</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="text2"
                                                    placeholder="Text2" value="<?= $fetch_sanpham['text2']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label class="card-people mt-auto" for="exampleInputName1">Text3</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="text3"
                                                    placeholder="Text3" value="<?= $fetch_sanpham['text3']; ?>">
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
                                                            name="image" accept="image/jpg, image/jpeg, image/png, image/webp"
                                                            id="file-input" class="box">
                                                    </div>
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-success mr-2" name="update">Submit</button>
                                            <a href="admin-sanpham.php" class="btn btn-warning">Cancel</a>
                                        </form>
                                        <?php
                                    }
                                } else {
                                    echo '<p class="empty">chưa có gì nào được thêm vào!</p>';
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