$('button#submit').on('click', () => {
    var name = $('input#product').val();
    if($.trim(name) != '') {
        $.ajax({
            type: 'POST',
            url: '../../db/addProduct.php',
            data: { product: name },
            success: (data) =>
            {
                
                var arrData = [];
                arrData.push(data);
                $('li#list').text(arrData);
            }
        });
    }
    $('input#product').val("");
})

