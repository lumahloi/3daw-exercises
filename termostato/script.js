function atualizar(){
  var valor = parseInt(document.getElementById("valor").value)
  var retangulo = document.getElementById("retangulo")
  var atencao = document.getElementById("atencao")
              
  if(valor >= 0 && valor <= 70){
    atencao.style.display = 'none'
    if(valor <= 29){
      retangulo.style.backgroundColor = '#add8e6'
    } else {
      if (valor <= 45){
        retangulo.style.backgroundColor = '#FFFFE0'
      } else {
        if (valor <= 60){
          retangulo.style.backgroundColor = 'red'
        } else {
          retangulo.style.backgroundColor = '#8b0000'
        }
      }
    }
  } else {
    retangulo.style.backgroundColor = 'white'
    atencao.style.display = 'block'
  }
}