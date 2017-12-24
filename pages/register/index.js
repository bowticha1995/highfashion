$('form').on('submit',(event) => {
    var loading = false;
    
    // data = $('form').serializeArray()
    // console.log($('#uploadImage'));
    const username = $('#username').val()
    const password = $('#password').val()
    const nickname = $('#nickname').val()
    const sex = $('#sex').val()
    const email = $('#email').val()
    const tel = $('#tel').val()
    const firstname = $('#firstname').val()
    const lastname = $('#lastname').val()
    const address = $('#address').val()
    const image = $('#uploadImage').val()
    //console.log(Object.value(dataArray))
    $.ajax({
        method: 'post',
        url: '../../db/register.php',
        data: {
            "username" : username,
            "password" : password,
            "firstname" : firstname,
            "lastname" : lastname,
            "nickname" : nickname,
            "sex" : sex,
            "tel" : tel,
            "email" : email,
            "address" : address,
            "image" : image,
        },
        dataType: 'json',
        //contentType: 'application/json',
        success: () => {
            loading = true;
            if (loading) {
                window.location.replace("../home")
            }
  
            //$(location).attr("href", '../home/');
            //$('form').reset()
        }
    })
})