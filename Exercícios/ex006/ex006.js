
var a = window.document.getElementById('area')
a.addEventListener('click', Clicar)
a.addEventListener('mouseenter', Entrar)
a.addEventListener('mouseout', Sair)


function Clicar(){
    a.innerText = 'Clicou!'
    a.style.background = 'red'
}

function Entrar(){
    a.innerText = 'Entrou!'
}

function Sair(){
    a.innerText = 'Saiu!'
    a.style.background = 'greem'
}