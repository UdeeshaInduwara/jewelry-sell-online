// chek username and password-  customerr login
$('#btnCustomerLogin').click(function () {
    let frm=$('#formCustomerLogin');
    let data=new FormData(frm[0]);
    data.append('action',"search");
    $.ajax({
        url:"api/service/CustomerService.php",
        method:"post",
        async:true,
        data:data,
        processData:false,
        contentType:false,
        dataType:"json"
    }).done(function (res) {
        if (res[0][5] == true) {
            window.location.href="product.php";
            localStorage.setItem("loggedCustomerID",res[0][0]);
        }else {
            window.location.href="login.php";
        }
    });
});