<?php
//FAZ A CONEXÃO AO BANCO DE DADOS UTILIZANDO PDO
    try{
        $HOST = "localhost";         //equivale ao ip localhost=127.0.0.1;
        $DB =   "sensor";         //nome do banco de dados;
        $USER = "root";            //usuario do banco;
        $PASS = "";               //senha do usuario;
                                 //passa os parametros para o PDO concatenando as variaveis ao objeto e seta utf8 como codificação padrão
        $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $DB . ";charset=utf8", $USER, $PASS);
    } catch(PDOException $erro) {
        //echo "Erro de conexão, detalhes:".$erro->getMessage();
        echo "Erro na conexao";
    }
?>