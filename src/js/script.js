const button_login = document.getElementById('button_entrar')
const email_login = document.getElementById('email_login')
const password_login = document.getElementById('password_login')

button_login.addEventListener('click', () =>{
    email_login.value = ""
    password_login.value = ""
})


$('.link_entrar a').click(function(){
    $('form').animate({
    height: "toggle",
    opacity: "toggle",
    }, "slow");
});