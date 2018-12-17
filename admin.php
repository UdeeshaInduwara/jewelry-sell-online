<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moonstone Jewelry Shop</title>
    <link rel="stylesheet" href="dist/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/Semantic-UI-CSS-master/semantic.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 160px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 70px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 160px;
            padding: 0 20px;
        }
    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Moonstone Jewelry</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" id="selectedDiv">Dashboard</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="ui category search">
                <div class="ui icon input">
                    <input class="prompt" type="text" placeholder="Search">
                    <i class="search icon"></i>
                </div>
            </div>
        </form>
    </div>
</nav>
<div class="sidenav bg-dark">
    <a href="#" id="clickJewelryType">Jewelry Types</a>
    <a href="#" id="clickJewelry">Jewelry</a>
    <a href="#" id="clickCustomer">Customers</a>
</div>
<div class="main" id="divJewelryType">
    <div style="height: 70px"></div>
    <form id="formJewelryType">
        <h3 class="text-center">Add Jewelry Types</h3>
        <div class="form-row">
            <div class="col-md-2"></div>
            <div class="form-group col-md-4">
                <label for="jewelryTypeID">Type ID</label>
                <input type="text" class="form-control" id="jewelryTypeID" name="jewelryTypeID" placeholder="Type ID">
            </div>
            <div class="form-group col-md-4">
                <label for="jewelryTypeName">Jewelry Type</label>
                <input type="text" class="form-control" id="jewelryTypeName" name="jewelryTypeName" placeholder="Jewelry Type">
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary" id="btnAddJewelryType">Add Jewelry Types</button>
        </div>
    </form>
    <br>
    <table class="table table-hover" id="tblViewAllJewelryTypes">
        <thead>
        <tr>
            <th scope="col">Type ID</th>
            <th scope="col">Jewelry Type</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<div class="main" id="divJewelry">
    <div style="height: 70px"></div>
    <form id="formJewelry">
        <h3 class="text-center">Add Jewelry</h3>
        <div class="form-row">
            <div class="col-md-2"></div>
            <div class="form-group col-md-4">
                <label for="jewelryID">Jewelry ID</label>
                <input type="text" placeholder="jewelry ID" name="jewelryID" id="jewelryID" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="jewelryTypeId">Jewelry Type ID</label>
                <input type="text" placeholder="jewelry Type ID" name="jewelryTypeId" id="jewelryTypeId"
                       class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-2"></div>
            <div class="form-group col-md-4">
                <label for="jewelryMetal">Metal</label>
                <input type="text" placeholder="Metal" name="jewelryMetal" id="jewelryMetal" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="jewelryPrice">Price</label>
                <input type="text" placeholder="Price" name="jewelryPrice" id="jewelryPrice" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-2"></div>
            <div class="form-group col-md-2">
                <label for="jewelryCarat">Carat</label>
                <input type="text" placeholder="Carat" name="jewelryCarat" id="jewelryCarat" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="jewelryWeight">Weight</label>
                <input type="text" placeholder="Weight" name="jewelryWeight" id="jewelryWeight" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="jewelrySize">Size</label>
                <input type="text" placeholder="Size" name="jewelrySize" id="jewelrySize" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-2"></div>
            <div class="form-group col-md-8">
                <label for="jewelryDescription">Description</label>
                <textarea placeholder="about Jewelry" name="jewelryDescription" id="jewelryDescription"
                          class="form-control"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-2"></div>
            <div class="form-group col-md-8">
                <div class="custom-file">
                    <label class="custom-file-label" for="jewelryImg">Choose Image</label>
                    <input type="file" class="custom-file-input" name="jewelryImg" id="jewelryImg">
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary" id="btnAddJewelry">Add Jewelry</button>
        </div>
    </form>
    <br>
    <table class="table table-hover" id="tblViewAllJewelry">
        <thead>
        <tr>
            <th scope="col">Jewelry ID</th>
            <th scope="col">Metal</th>
            <th scope="col">Carat</th>
            <th scope="col">Weight</th>
            <th scope="col">Size</th>
            <th scope="col">Price</th>
            <th scope="col">Type ID</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<div class="main" id="divCustomer">
    <div style="height: 70px"></div>
    <table class="table table-hover" id="tblViewAllCustomers">
        <thead>
        <tr>
            <th scope="col">Customer ID</th>
            <th scope="col">Name</th>
            <th scope="col">Country</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="dist/js/notify.min.js"></script>
<script src="dist/Semantic-UI-CSS-master/semantic.min.js"></script>
<script src="dist/controller/AdminFormController.js"></script>
</body>
</html>