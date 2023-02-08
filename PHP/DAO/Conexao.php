<?php

    namespace PHP\DAO;

    class Conexao{

        public function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'Mercado');
                if($conn){
                    return "Conectado com sucesso!";
                }
                echo "<br> Não entrou!";
            }
            catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do conectar

    }//fim da classe
?>