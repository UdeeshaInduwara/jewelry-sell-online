<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moonstone Jewelry Shop</title>
    <link rel="stylesheet" href="dist/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/Semantic-UI-CSS-master/semantic.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Playfair+Display" rel="stylesheet">
    <style>
        .login-block {
            float: left;
            width: 100%;
            padding: 50px 0;
        }

        .container {
            background: #D3D3D3;
            border-radius: 10px;
            width: 40%;
            height: 40%;
        }

        .login-sec {
            padding: 50px 30px;
            position: relative;
        }

        .login-sec h2 {
            margin-bottom: 30px;
            font-weight: 800;
            font-size: 30px;
            color: #c19b76;
        }

        .login-sec h2:after {
            content: " ";
            width: 100px;
            height: 5px;
            background: #503728;
            display: block;
            margin-top: 20px;
            border-radius: 3px;
            margin-left: auto;
            margin-right: auto
        }

        .btn-login {
            background: #c19b76;
            color: #fff;
            font-weight: 600;
        }
    </style>
</head>
<body>
<section class="login-block">
    <div class="container">
        <div class="row ">
            <div class="col login-sec">
                <h2 class="text-center">Register</h2>
                <form class="login-form" id="formRegisterCustomer">
                    <div class="form-group">
                        <label for="customerID" class="text-uppercase">Your ID</label>
                        <input type="text" class="form-control" id="customerID" name="customerID">
                    </div>
                    <div class="form-group">
                        <label for="customerName" class="text-uppercase">Your Name</label>
                        <input type="text" class="form-control" id="customerName" name="customerName">
                    </div>
                    <div class="form-group">
                        <label for="customerCountry" class="text-uppercase">Country</label>
                        <input type="text" class="form-control" id="customerCountry" name="customerCountry">
                    </div>
                    <div class="form-group">
                        <label for="customerEmail" class="text-uppercase">E-Mail</label>
                        <input type="email" class="form-control" id="customerEmail" name="customerEmail">
                    </div>
                    <div class="form-group">
                        <label for="customerPassword" class="text-uppercase">Password</label>
                        <input type="password" class="form-control" id="customerPassword" name="customerPassword">
                    </div>
                    <small class="text-black-50">Allredy have an account? Log in here <a href="login.php">Log in</a>
                    </small>
                    <button type="button" class="btn btn-login float-right" id="btnRegisterCustomer">Register Here
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/controller/RegisterFormController.js"></script>
</body>
</html>