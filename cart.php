<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
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
            <a class="nav-item nav-link" href="product.php"><i class="heart icon"></i>Products</a>
            <a class="nav-item nav-link" href="#"><i class="align left icon"></i>About us</a>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
            <li class="nav-item">
                <a class="nav-item nav-link active" href="cart.php"><i class="shopping cart large icon"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="register.php"><i class="user circle large icon"></i></a>
            </li>
        </ul>
    </div>
</nav>
<div style="height: 80px"></div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-6" id="homeForSelectedJewelry"></div>
    <div class="col-md-4">
        <div class="row">
            <div class="card" style="width: 100%">
                <div class="card-header">
                    About Your Items
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <h5 class="text-black-50">Total : Rs</h5>
                        </div>
                        <div class="col-7">
                            <h4 id="totalJewlryPrice"></h4>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-5">
                            <h5 class="text-black-50">Quantity :</h5>
                        </div>
                        <div class="col-7">
                            <h4 id="totalJewelryCount"></h4>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-5">
                            <h5 class="text-black-50">Guarantee :</h5>
                        </div>
                        <div class="col-7">
                            <h5>100% money back Guarantee</h5>
                            <small>
                                Get the item you ordered or get your money back.
                                Covers your purchase price and original shipping.
                            </small>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <button class="btn btn-success" id="btnBuyOrder">Buy now</button>
                        </div>
                        <div class="col-9">
<!--                            <button class="btn btn-success" id="btnBookOrder">Book for me</button>-->
                            <br>
                            <small>i'm travaller and i'll buy them after vist</small>
                            <br>
                            <small class="text-danger">you must pay 50% of total</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php require_once "footer.php"; ?>
<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/notify.min.js"></script>
<script src="dist/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="dist/Semantic-UI-CSS-master/semantic.min.js"></script>
<script src="dist/controller/CartFormController.js"></script>
</body>
</html>