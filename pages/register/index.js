$('form').on('submit',(event) => {
    event.preventDefault()
    data = $('form').serializeArray()
    console.log($('#uploadImage'));
    
    const dataArray = [{
        "username" : data[0].value,
        "password" : data[1].value,
        "firstname" : data[2].value,
        "lastname" : data[3].value,
        "nickname" : data[4].value,
        "sex" : data[5].value,
        "tel" : data[6].value,
        "email" : data[7].value,
        "address" : data[8].value,
        "image" : $('#uploadImage')[0].value,
    }]
    console.log(dataArray)
    $.ajax({
        type: 'post',
        url: '../../db/register.php',
        data: dataArray,
        success: () => {
            console.log("register success")
        }
    })
})