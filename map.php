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
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d24723.56315614932!2d9.100437197656717!3d39.232759923169304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srestaurants!5e0!3m2!1sen!2sit!4v1531210982974" width="100%" height="800px" frameborder="0" style="border:0" allowfullscreen></iframe>

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
