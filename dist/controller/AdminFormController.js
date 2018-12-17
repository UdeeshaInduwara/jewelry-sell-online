$( document ).ready(function() {
    $('#divJewelryType').show();
    $('#divJewelry').hide();
    $('#divCustomer').hide();

    loadJewelryTypesToTable();
    loadAllJewelryToTable();
    loadAllCustomersToTable();
});

$('#clickJewelryType').click(function () {
    $('#divJewelryType').show();
    $('#divJewelry').hide();
    $('#divCustomer').hide();

    $('#selectedDiv').text("Jewelry Type");

    $('#clickJewelryType').css('color','white');
    $('#clickJewelry').css('color','#818181');
    $('#clickCustomer').css('color','#818181');
});
$('#clickJewelry').click(function () {
    $('#divJewelry').show();
    $('#divJewelryType').hide();
    $('#divCustomer').hide();

    $('#selectedDiv').text("Jewelry");

    $('#clickJewelry').css('color','white');
    $('#clickJewelryType').css('color','#818181');
    $('#clickCustomer').css('color','#818181');
});
$('#clickCustomer').click(function () {
    $('#divCustomer').show();
    $('#divJewelry').hide();
    $('#divJewelryType').hide();

    $('#selectedDiv').text("Customers");

    $('#clickCustomer').css('color','white');
    $('#clickJewelry').css('color','#818181');
    $('#clickJewelryType').css('color','#818181');
});

// to load jewelry types to tbl
function loadJewelryTypesToTable(){
    $("#tblViewAllJewelryTypes tbody").empty();
    $.ajax({
        url: "api/service/JewelryTypeService.php",
        method: "post",
        data: {action: "getAll"},
        async: true,
        dataType: "json"
    }).done(function (res) {
        for (let jew of res) {
            let row = "<tr><td>" + jew[0] + "</td><td><input type='text' value='"+jew[1]+"' id='text"+jew[0]+"' class='form-control'></td><td>" + jew[2] + "</td><td><button class='btn btn-danger' id='d"+jew[0]+"'>Delete</button><span class='ml-3'></span><button class='btn btn-success' id='u"+jew[0]+"'>Update</button></td></tr>";
            $("#tblViewAllJewelryTypes tbody").append(row);
            $("#d"+jew[0]).click(function () {
                $.ajax({
                    url: "api/service/JewelryTypeService.php",
                    method: "post",
                    data: {action: "delete",jewTIdForDel:jew[0]},
                    async: true
                }).done(function (res) {
                    if (res==1){
                        $.notify("Successfully","success");
                    } else {
                        $.notify("Failed","error");
                    }
                    loadJewelryTypesToTable();
                });
            });
            $("#u"+jew[0]).click(function () {
                $.ajax({
                    url: "api/service/JewelryTypeService.php",
                    method: "post",
                    data: {action:"update",jewTIdForUp:jew[0],jewTNameForUp:$('#text'+jew[0]).val()},
                    async: true
                }).done(function (res) {
                    if (res==1){
                        $.notify("Successfully","success");
                    } else {
                        $.notify("Failed","error");
                    }
                    loadJewelryTypesToTable();
                });
            });
        }
    });
}

// load all jewelry to table
function loadAllJewelryToTable() {
    $("#tblViewAllJewelry tbody").empty();
    $.ajax({
        url:"api/service/JewelryService.php",
        method:"post",
        data:{action:"getAll"},
        async:true,
        dataType:"json"
    }).done(function (res) {
        for (let jew of res) {
            let row="<tr><td>"+jew[0]+"</td>" +
                "<td><input type='text' class='form-control' value='"+jew[1]+"' id='jmetal"+jew[0]+"'></td>" +
                "<td><input type='text' class='form-control' value='"+jew[2]+"' id='jcaret"+jew[0]+"'></td>" +
                "<td><input type='text' class='form-control' value='"+jew[3]+"' id='jweight"+jew[0]+"'></td>" +
                "<td><input type='text' class='form-control' value='"+jew[4]+"' id='jsize"+jew[0]+"'></td>" +
                "<td><input type='text' class='form-control' value='"+jew[5]+"' id='jprice"+jew[0]+"'></td>" +
                "<td>"+jew[6]+"</td>" +
                "<td><input type='text' class='form-control' value='"+jew[8]+"' id='jdescription"+jew[0]+"'></td>" +
                "<td><img src='dist/images/"+jew[7]+"' alt='jewelry' width='30px'></td>" +
                "<td><button class='btn btn-danger' id='dj"+jew[0]+"'>Delete</button><button class='btn btn-success' id='uj"+jew[0]+"'>Update</button></td></tr>";
            $("#tblViewAllJewelry tbody").append(row);
            $("#dj"+jew[0]).click(function () {
                $.ajax({
                    url: "api/service/JewelryService.php",
                    method: "post",
                    data: {action: "delete",jewIdForDel:jew[0]},
                    async: true
                }).done(function (res) {
                    if (res==1){
                        $.notify("Successfully","success");
                    } else {
                        $.notify("Failed","error");
                    }
                    loadAllJewelryToTable();
                });
            });
            $("#uj"+jew[0]).click(function () {
                $.ajax({
                    url: "api/service/JewelryService.php",
                    method: "post",
                    data: {
                        action: "update",
                        jewIdForDel:jew[0],
                        jmetal:$('#jmetal'+jew[0]).val(),
                        jcaret:$('#jcaret'+jew[0]).val(),
                        jweight:$('#jweight'+jew[0]).val(),
                        jsize:$('#jsize'+jew[0]).val(),
                        jprice:$('#jprice'+jew[0]).val(),
                        jjtid:jew[6],
                        jdescription:$('#jdescription'+jew[0]).val(),
                        jimgpath:jew[7]
                    },
                    async: true
                }).done(function (res) {
                    if (res==1){
                        $.notify("Successfully","success");
                    } else {
                        $.notify("Failed","error");
                    }
                    loadAllJewelryToTable();
                });
            });
        }
    });
}

// load all customers to tbl
function loadAllCustomersToTable(){
    $("#tblViewAllCustomers tbody").empty();
    $.ajax({
        url: "api/service/CustomerService.php",
        method: "post",
        async: true,
        data: {action: "getAll"},
        dataType: "json"
    }).done(function (res) {
        for (let cust of res) {
            let row = "<tr><td>" + cust[0] + "</td><td>" + cust[1] + "</td><td>" + cust[2] + "</td><td>" + cust[3] + "</td><td>" + cust[4] + "</td></tr>";
            $("#tblViewAllCustomers tbody").append(row);
        }
    });
}

// to add jewelry type
$('#btnAddJewelryType').click(function () {
    let jewelryTypeID = $('#jewelryTypeID').val();
    let jewelryTypeName = $('#jewelryTypeName').val();

    if (!(/^[j][t][0-9]{3}$/.test(jewelryTypeID))) {
        $('#jewelryTypeID').focus();
        return;
    }
    if (!(/^[A-z]+$/.test(jewelryTypeName))) {
        $('#jewelryTypeName').focus();
        return;
    }

    let frm = $('#formJewelryType');
    let data = new FormData(frm[0]);
    data.append('action', "add");
    $.ajax({
        url: "api/service/JewelryTypeService.php",
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
        loadJewelryTypesToTable();
    });
});

// add jewelry with image
$("#btnAddJewelry").click(function () {
    let jewelryID = $('#jewelryID').val();
    let jewelryMetal = $('#jewelryMetal').val();
    let jewelryPrice = $('#jewelryPrice').val();
    let jewelryCarat = $('#jewelryCarat').val();
    let jewelryWeight = $('#jewelryWeight').val();
    let jewelrySize = $('#jewelrySize').val();
    let jewelryDescription = $('#jewelryDescription').val();

    if (!(/^[j][e][w][0-9]{3}$/.test(jewelryID))) {
        $('#jewelryID').focus();
        return;
    }
    if (!(/^[A-z]+$/.test(jewelryMetal))) {
        $('#jewelryMetal').focus();
        return;
    }
    if (!(/\d/.test(jewelryPrice))) {
        $('#jewelryPrice').focus();
        return;
    }
    if (!(/\d/.test(jewelryCarat))) {
        $('#jewelryCarat').focus();
        return;
    }
    if (!(/\d/.test(jewelryWeight))) {
        $('#jewelryWeight').focus();
        return;
    }
    if (!(/\d/.test(jewelrySize))) {
        $('#jewelrySize').focus();
        return;
    }
    if (!(/^[A-z ]+$/.test(jewelryDescription))) {
        $('#jewelryDescription').focus();
        return;
    }

    let frm = $("#formJewelry");
    let data = new FormData(frm[0]);
    data.append('action', "add");
    $.each($("#jewelryImg")[0].files, function (i, file) {
        data.append('jewelryImg', file);
    });
    $.ajax({
        url: "api/service/JewelryService.php",
        type: "post",
        processData: false,
        data: data,
        contentType: false,
        success: function (rst) {
            if (rst==1){
                $.notify("Successfully","success");
            } else {
                $.notify("Failed","error");
            }
            loadAllJewelryToTable();
        }
    });
});

