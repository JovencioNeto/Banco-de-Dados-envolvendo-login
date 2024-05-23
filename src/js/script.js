const button_login = document.getElementById('button_entrar')
const email_login = document.getElementById('email_login')
const password_login = document.getElementById('password_login')
const form_login = document.getElementById('form_login')
const form_cad = document.getElementById('form_cad')

button_login.addEventListener('click', () =>{
    email_login.value = ""
    password_login.value = ""
})


$('.link_entrar a').click(function(){
    form_cad.style.justifyContent = "center";
    form_cad.style.display= "flex"
    form_cad.style.alignItems= "center"
    $('form').animate({
    height: "toggle",
    opacity: "toggle",
    }, "slow");
});
