// customer self registration
$('#btnRegisterCustomer').click(function () {
    let customerID = $('#customerID').val();
    let customerName = $('#customerName').val();
    let customerCountry = $('#customerCountry').val();
    let customerEmail = $('#customerEmail').val();

    if (!(/^[c][0-9]{3}$/.test(customerID))) {
        $('#customerID').focus();
        return;
    }
    if (!(/^[A-z]+$/.test(customerName))) {
        $('#customerName').focus();
        return;
    }
    if (!(/^[A-z]+$/.test(customerCountry))) {
        $('#customerCountry').focus();
        return;
    }
    if (!(/^[a-z.]+[@][a-z]+[.][a-z]+$/.test(customerEmail))) {
        $('#customerEmail').focus();
        return;
    }

    let frm=$('#formRegisterCustomer');
    let data=new FormData(frm[0]);
    data.append('action',"add");
    $.ajax({
        url:"api/service/CustomerService.php",
        method:"post",
        async:true,
        data:data,
        processData:false,
        contentType:false
    }).done(function (res) {
        if (res == 1) {
            window.location.href="login.php";
        }
    });
});