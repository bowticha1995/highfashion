

$(".img-profile").on('click', () => {
    $(".login").css('display','none')
    $(".background-login-container").css('display','flex')
})

$("#back-button").on('click', () => {
    $(".login").css('display','block')
    $(".background-login-container").css('display','none')
})