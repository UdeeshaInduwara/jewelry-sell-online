<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" href="dist/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/Semantic-UI-CSS-master/semantic.min.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="dist/uiImages/logo.png" width="100" height="50" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.php"><i class="university icon"></i>Home</a>
            <a class="nav-item nav-link active" href="product.php"><i class="heart icon"></i>Products <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#"><i class="align left icon"></i>About us</a>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
            <li class="nav-item">
                <a class="nav-item nav-link" href="cart.php"><i class="shopping cart large icon"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="register.php"><i class="user circle large icon"></i></a>
            </li>
        </ul>
    </div>
</nav>
<div style="height: 80px"></div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" id="homeForJewelry"></div>
    <div class="col-md-2"></div>
</div>
<br>
<?php require_once "footer.php"; ?>
<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/notify.min.js"></script>
<script src="dist/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="dist/Semantic-UI-CSS-master/semantic.min.js"></script>
<script src="dist/controller/ProductFormController.js"></script>
</body>
</html>