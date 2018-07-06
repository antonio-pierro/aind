<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('components/head.html'); ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <?php require('components/navigation.php'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active">My Home</li>
            </ol>
            <?php require('components/icon-cards.html'); ?>

            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Your Website 2018</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <?php require('components/logout.html'); ?>
            <?php require('components/script.html'); ?>
        </div>
    </div>
</body>

</html>
