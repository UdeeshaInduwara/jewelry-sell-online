<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moonstone Jewelry Shop</title>
    <link rel="stylesheet" href="dist/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/Semantic-UI-CSS-master/semantic.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Playfair+Display" rel="stylesheet">
    <style>
        .jew-hover:hover{
            transition: all 0.5s;
            padding: 10px;
        }
        .jew-hover{
            transition: all 0.5s;
        }
        .arjs{
            font-family: 'Poiret One', cursive;
            font-size: 24px;
            color: white;
            transition: all 0.5s;
        }
        .arjs:hover{
            transition: all 0.5s;
            color: black;
        }
    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="dist/uiImages/logo.png" width="100" height="50" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="home.php"><i class="university icon"></i>Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="product.php"><i class="heart icon"></i>Products</a>
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
<div style="height: 70px"></div>
<div class="row">
    <div class="col-md-7">
        <img class="ui image" src="dist/uiImages/cover.png">
    </div>
    <div class="col-md-5 text-center">
        <h2 class="m-3" style="font-family: 'Poiret One', cursive; font-size: 30px">
            #no 1
            <br>
            Moonstone Jewelry Shop
            <br>
            <small>in</small>
            Sri Lanka
        </h2>
    </div>
</div>
<div class="row">
    <div class="col-md-6 text-left text-light" style="background: black">
        <div style="margin: 60px">
            <h1 style="font-family: 'Playfair Display', serif; font-size: 55px;margin: 0">Discover Our</h1>
            <h1 style="font-family: 'Playfair Display', serif; font-size: 55px;margin: 0;color: #c19b76">History</h1>
            <br>
            <div class="row">
                <div class="col-6" style="font-family: 'Poiret One', cursive;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ducimus
                    laudantium repudiandae unde. Odit, tempore, vero. Aperiam aspernatur cumque
                    deleniti, dolorum eius exercitationem fuga impedit, molestiae omnis quaerat
                    repellendus tempora!
                </div>
                <div class="col-6" style="font-family: 'Poiret One', cursive;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur
                    beatae fugit hic incidunt iusto labore nam numquam, officia officiis optio
                    perferendis quisquam quod repellendus reprehenderit, rerum ullam! Fugiat, id!
                </div>
            </div>
            <br>
            <a class="btn btn-dark btn-lg" href="#" role="button">About us</a>
        </div>
    </div>
    <div class="col-md-6" style="padding: 0">
        <img class="ui image" src="dist/uiImages/aboutus-img.jpg">
    </div>
</div>
<br>
<div class="container">
    <h2 class="m-3 text-center" style="font-family: 'Poiret One', cursive; font-size: 30px">Our Best Products</h2>
    <div class="row">
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="dist/uiImages/j1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Moonstone Jewelry Shop</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="dist/uiImages/j2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Moonstone Jewelry Shop</h2>
                            <p>totam voluptates voluptatum. Aliquid error rem sequi.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="dist/uiImages/j3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Moonstone Jewelry Shop</h2>
                            <p>magnam, minima nihil perferendis repellat rerum sapiente sunt</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="dist/uiImages/j4.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Moonstone Jewelry Shop</h2>
                            <p>Animi assumenda deserunt eveniet inventore ipsa, ipsum </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="dist/uiImages/j5.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Moonstone Jewelry Shop</h2>
                            <p>magnam, minima nihil perferendis repellat rerum sapiente sunt</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <img class="ui rounded image jew-hover" src="dist/uiImages/j2.jpg">
            <br>
            <img class="ui rounded image jew-hover" src="dist/uiImages/j3.jpg">
        </div>
        <div class="col-md-3">
            <img class="ui rounded image jew-hover" src="dist/uiImages/j4.jpg">
            <br>
            <img class="ui rounded image jew-hover" src="dist/uiImages/j5.jpg">
        </div>
    </div>
</div>
<br>
<div class="container">
    <h2 class="m-3 text-center" style="font-family: 'Poiret One', cursive; font-size: 30px">Around the Jewelry Shop</h2>
    <div class="row text-center">
        <div class="col-md-3">
            <div class="card jew-hover">
                <img class="ui medium rounded image" src="dist/uiImages/jewd2.jpg">
                <div class="card-img-overlay">
                    <h4 class="arjs">Beautifull Lake Scantury</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card jew-hover">
                <img class="ui medium rounded image" src="dist/uiImages/jewd3.jpg">
                <div class="card-img-overlay">
                    <h4 class="arjs">Mooonstone Mining</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card jew-hover">
                <img class="ui medium rounded image" src="dist/uiImages/jewd4.jpg">
                <div class="card-img-overlay">
                    <h4 class="arjs">Jewelry Workers</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card jew-hover">
                <img class="ui medium rounded image" src="dist/uiImages/jewd1.jpg">
                <div class="card-img-overlay">
                    <h4 class="arjs">Jewelry Shop</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php require_once "footer.php"; ?>
<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="dist/Semantic-UI-CSS-master/semantic.min.js"></script>
</body>
</html>