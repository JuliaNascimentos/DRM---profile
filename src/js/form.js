//Variáveis
const button_login = document.getElementById('button_entrar')
const email_login = document.getElementById('email_login')
const password_login = document.getElementById('password_login')

// Função para quando clicar no link ele alternar entre um formulário e outro
$('.link_entrar a').click(function(){
    $('form').animate({
    height: "toggle",
    opacity: "toggle",
    }, "slow");
});