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
            color: #0069c0;
        }

        .login-sec h2:after {
            content: " ";
            width: 100px;
            height: 5px;
            background: #6ec6ff;
            display: block;
            margin-top: 20px;
            border-radius: 3px;
            margin-left: auto;
            margin-right: auto
        }

        .btn-login {
            background: #0069c0;
            color: #fff;
            font-weight: 600;
        }
    </style>
</head>
<body>
<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col login-sec">
                <h2 class="text-center">Login Now</h2>
                <form class="login-form" id="formCustomerLogin">
                    <div class="form-group">
                        <label for="loginUsername" class="text-uppercase">Username</label>
                        <input type="text" class="form-control" placeholder="Username" id="loginUsername" name="loginUsername">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword" class="text-uppercase">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="loginPassword" name="loginPassword">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            <small>Remember Me</small>
                        </label>
                        <button type="button" class="btn btn-login float-right" id="btnCustomerLogin">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/controller/LoginFormController.js"></script>
</body>
</html>