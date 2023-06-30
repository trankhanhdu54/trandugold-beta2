<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Message</title>
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

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_message = $conn->prepare("DELETE FROM `messages` WHERE id = ?");
    $delete_message->execute([$delete_id]);
    header('location:tinnhan');
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
        <!-- <div class="main-panel"> -->
        <div class="content-wrapper">
            <div class="row">
                <?php
                $select_messages = $conn->prepare("SELECT * FROM `messages` ORDER BY id DESC");
                $select_messages->execute();
                if ($select_messages->rowCount() > 0) {
                    while ($fetch_messages = $select_messages->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">#ID:
                                        <?= $fetch_messages['id']; ?>
                                    </h4>
                                    <div class="">
                                        <!-- <img style="width:200px" src="../../../slider_img/gold.png" alt="trandugold"> -->
                                        <div class="text-success">Name :<h5>
                                                <?= $fetch_messages['name']; ?>
                                            </h5>
                                        </div>

                                        <div class="text-primary">Email :<h5>
                                                <?= $fetch_messages['email']; ?>
                                            </h5>
                                        </div>

                                        <div class="text-info">Message :<h5>
                                                <?= $fetch_messages['message']; ?>
                                            </h5>
                                        </div>
                                        <div class="flex-btn">
                                            <a href="tinnhan?delete=<?= $fetch_messages['id']; ?>"
                                                class="btn btn-danger" onclick="return confirm('Xóa chứ?');">Xóa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<p class="empty">Chưa có tin nhắn nào cả !</p>';
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