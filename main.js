const tabela = document.getElementById("tabelaDados")

function teste(){

    fetch('leitura.php')
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
