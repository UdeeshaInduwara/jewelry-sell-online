// load all jewelries
var favJewelryList = new Array();
var jPriceTotal = 0;
var jItemCount = 0;
var reservationId = "res1";
$(document).ready(function () {
    $.ajax({
        url: "api/service/ReservationService.php",
        method: "post",
        data: {action: "getAll"},
        async: true,
        dataType: "json"
    }).done(function (res) {
        let x = String(res[0][0]);
        let y = x.split("res");
        let z = y[1];
        let a = Number(z);
        let b = a + 1;
        let c = "res" + b;
        if (c !== null) {
            reservationId = c;
        }
    });
    if (localStorage.getItem("loggedCustomerID") != null) {
        $("#homeForSelectedJewelry").empty();
        $.ajax({
            url: "api/service/AddToCartService.php",
            method: "post",
            data: {action: "search", loadCustId: localStorage.getItem("loggedCustomerID")},
            async: true,
            dataType: "json"
        }).done(function (res) {
            for (let jew of res) {
                let card = '<div class="card">\n' +
                    '            <div class="card-body">\n' +
                    '                <div  class="row">\n' +
                    '                    <div class="col-4">\n' +
                    '                        <img class="card-img" src="dist/images/' + jew[7] + '" alt="jewelry">\n' +
                    '                    </div>\n' +
                    '                    <div class="col-8">\n' +
                    '                        <h5 class="card-title">Special title treatment</h5>\n' +
                    '                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>\n' +
                    '                        <div class="row">\n' +
                    '                            <div class="col-6">\n' +
                    '                                <h5>Metal : ' + jew[1] + '</h5>\n' +
                    '                            </div>\n' +
                    '                            <div class="col-6">\n' +
                    '                                <h5>Carat : ' + jew[2] + '</h5>\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                        <br>\n' +
                    '                        <div class="row">\n' +
                    '                            <div class="col-6">\n' +
                    '                                <h5>Weight : ' + jew[3] + '</h5>\n' +
                    '                            </div>\n' +
                    '                            <div class="col-6">\n' +
                    '                                <h5>Size : ' + jew[4] + '</h5>\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                        <h4 >Price : ' + jew[5] + '</h4>\n' +
                    '                        <button id="rem' + jew[0] + '" class="btn btn-dark">Delete</button>\n' +
                    '                    </div>\n' +
                    '                </div>\n' +
                    '            </div>\n' +
                    '        </div>';
                $("#homeForSelectedJewelry").append(card);
                favJewelryList.push(jew[0]);

                let num = Number(jew[5]);
                jPriceTotal = jPriceTotal + num;
                $('#totalJewlryPrice').text(jPriceTotal);

                jItemCount = jItemCount + 1;
                $('#totalJewelryCount').text(jItemCount);

                $('#rem' + jew[0]).click(function () {
                    $.ajax({
                        url: "api/service/ReservationService.php",
                        method: "post",
                        async: true,
                        data: {action: "delete", remjewId: jew[0], remcustId: localStorage.getItem("loggedCustomerID")}
                    }).done(function (res) {
                        if (res==1){
                            $.notify("Successfully","success");
                        } else {
                            $.notify("Failed","error");
                        }
                        window.location.href = "cart.php";
                    });
                });
            }
        });
    } else {
        window.location.href = "login.php";
    }
});

$('#btnBuyOrder').click(function () {
    let data = new FormData();
    data.append('action', "add");
    let jIds = JSON.stringify(favJewelryList);
    data.append('jewIds', jIds);
    data.append('custId', localStorage.getItem("loggedCustomerID"));
    data.append('resId', reservationId);
    data.append('resType', "buy");
    $.ajax({
        url: "api/service/ReservationService.php",
        method: "post",
        async: true,
        data: data,
        processData: false,
        contentType: false
    }).done(function (res) {
        if (res==1){
            $.notify("Successfully","success");
        } else {
            $.notify("Failed","error");
        }
        window.location.href = "cart.php";
    });
});
$('#btnBookOrder').click(function () {
    let data = new FormData();
    data.append('action', "add");
    let jIds = JSON.stringify(favJewelryList);
    data.append('jewIds', jIds);
    data.append('custId', localStorage.getItem("loggedCustomerID"));
    data.append('resId', reservationId);
    data.append('resType', "book");
    $.ajax({
        url: "api/service/ReservationService.php",
        method: "post",
        async: true,
        data: data,
        processData: false,
        contentType: false
    }).done(function (res) {
        if (res==1){
            $.notify("Successfully","success");
        } else {
            $.notify("Failed","error");
        }
        window.location.href = "cart.php";
    });
});