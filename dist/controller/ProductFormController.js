// load all jewelries
$( document ).ready(function() {
    $("#homeForJewelry").empty();
    $.ajax({
        url:"api/service/JewelryService.php",
        method:"post",
        data:{action:"getAll"},
        async:true,
        dataType:"json"
    }).done(function (res) {
        for (let jew of res) {
            let card='<div class="card">\n' +
                '            <div class="card-body">\n' +
                '                <div  class="row">\n' +
                '                    <div class="col-4">\n' +
                '                        <img class="card-img" src="dist/images/'+jew[7]+'" alt="jewelry">\n' +
                '                    </div>\n' +
                '                    <div class="col-8">\n' +
                '                        <h5 class="card-title">'+jew[9]+'</h5>\n' +
                '                        <p class="card-text">'+jew[8]+'</p>\n' +
                '                        <div class="row">\n' +
                '                            <div class="col-6">\n' +
                '                                <h5>Metal : '+jew[1]+'</h5>\n' +
                '                            </div>\n' +
                '                            <div class="col-6">\n' +
                '                                <h5>Carat : '+jew[2]+'</h5>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <br>\n' +
                '                        <div class="row">\n' +
                '                            <div class="col-6">\n' +
                '                                <h5>Weight : '+jew[3]+'</h5>\n' +
                '                            </div>\n' +
                '                            <div class="col-6">\n' +
                '                                <h5>Size : '+jew[4]+'</h5>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <h4 >Price : '+jew[5]+'</h4>\n' +
                '                        <button id="'+jew[0]+'" class="btn btn-danger">Add to my Carts</button>\n' +
                '                    </div>\n' +
                '                </div>\n' +
                '            </div>\n' +
                '        </div>';
            $("#homeForJewelry").append(card);
            $('#'+jew[0]).click(function () {
                if (localStorage.getItem("loggedCustomerID")!=null){
                    $.ajax({
                        url:"api/service/AddToCartService.php",
                        method:"post",
                        async:true,
                        data:{action:"add",jewId:jew[0],custId:localStorage.getItem("loggedCustomerID")}
                    }).done(function (res) {
                        if (res==1){
                            $.notify("Successfully","success");
                        } else {
                            $.notify("Failed","error");
                        }
                    });
                }else {
                    window.location.href="login.php";
                }
            });
        }
    });
});