$('form').on('submit',(event) => {
    event.preventDefault()
    console.log("Submit");
    
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
    if($.trim(username) != '' && $.trim(password) != '' && $.trim(email) != '' 
        && $.trim(firstname) != '' && $.trim(lastname) != '' 
        && $.trim(address) != '' && $.trim(tel) != '') {
        $.ajax({
            method: 'post',
            url: '../../db/register.php/register',
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
            success: (res) => {
                console.log(res.status)
                if(res.status === 200) {
                    window.location.href = "../login/"
                }
            }
        })    
    }
    
})