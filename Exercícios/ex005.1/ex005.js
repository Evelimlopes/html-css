var n1 = Number(window.prompt('digite um numero: '))
var n2 = Number(window.prompt('digite outro numero:')) 
var s = n1 + n2
window.alert(`A soma entre ${n1} e ${n2} é ${s}`)


var nome = window.prompt('Qual é o seu nome?')
document.write(`Ola ${nome}!.Seu nome tem ${nome.length} letras <br>`)
document.write(`Seu nome em minúsculo é ${nome.toLowerCase()} <br>`)
document.write(`Seu nome em Maiúsculo é ${nome.toUpperCase()} <br>`)

//DOM = get....
var pl = window.document.getElementsByTagName('p')[1]
window.document.write(`paragrafo em exibição:` + pl.innerText)
pl.style.color = 'red'
var d = window.document.getElementById('img')
d.style.background = 'green'
//d.innerText = 'não tenho nada de mais....'

