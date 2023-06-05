<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="http://localhost/phpmaster/project/ismart-view/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">

    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/bootstrap/bootstrap.bundle.min.js"></script>
    <title>ISMart View</title>
</head>

<body>
    <div id="wrapper">
        <div id="header" class="shadow sticky-top z-10 bg-white p-14">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-2">
                        <div class="nav-logo ">
                            <a href="" id="admin-logo" class="fs-4 fw-semibold text-decoration-none">AdminStator</a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="nav_right d-flex align-items-center justify-content-between">
                            <div class="nav_add dropdown">
                                <button class="btn-t" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="button">
                                    <i class="text-secondary fa-solid fa-circle-plus fa-2xl"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Thêm sản phẩm</a></li>
                                    <li><a class="dropdown-item" href="#">Thêm bài viết</a></li>
                                    <li><a class="dropdown-item" href="#">Thêm tiền</a></li>
                                </ul>
                            </div>
                            <div class="nav_admin">
                                <div class="dropdown">
                                    <button class="btn-t fs-5 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Trần Thanh Phú
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Tài khoản</a></li>
                                        <li><a class="dropdown-item" href="#">Thoát</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="wp_content" class="mh-600">
            <div class="row">
                <div class="col-2 bg-transparent">
                    <?php 
                    require './layouts/siderbar.php';
                    ?>
                </div>
                <div class="col-10 bg-body-secondary">