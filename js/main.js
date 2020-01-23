const tabela = document.getElementById("tabelaDados")
const valor_potencia = document.getElementById("potencia")
const valor_umidade = document.getElementById("umidade")
const valor_luminosidade = document.getElementById("luminosidade")

function teste(){

    fetch('./read/leitura.php')
        .then(res => res.json())
        .then(json => setLinha(json))
    
    
    function setLinha(stats){
        let coisa = ''
        
        for(var i=0; i<stats.length; i++) {
            console.log(i, stats[i]); // i é o índice, matriz[i] é o valor

            coisa = coisa + '<tr><th scope="row">'+ stats[i].ID +'</th><td>'+ stats[i].Poten +'</td><td>'+ stats[i].Data +'</td><td>' + stats[i].Hora + '</td></tr>'

        }
        
        tabela.innerHTML = coisa
    }

}

function temperatura_atual() {
    fetch('./read/temp_atual.php')
        .then(res => res.json())
        .then(json => setValor(json))
    
    function setValor(stats){
        valor_potencia.innerHTML = stats[0].Poten + " °C"
    }
}

function umidade_atual() {
    fetch('./read/umidade_atual.php')
        .then(res => res.json())
        .then(json => setValor(json))
    
    function setValor(stats){
        valor_umidade.innerHTML = stats[0].Poten1 + " g/Kg"
    }
}

function luminosidade_atual() {
    fetch('./read/luminosidade_atual.php')
        .then(res => res.json())
        .then(json => setValor(json))
    
    function setValor(stats){
        valor_luminosidade.innerHTML = stats[0].Poten2 + " Lx"
    }
}