<?php
    namespace PHP\DAO;
    
    require_once('Conexao.php');
    require_once('Modelo/Endereco.php');

    use PHP\DAO\Conexao;
    use PHP\Modelo\Endereco;

    class InserirEndereco{

        public function Cadastrar(Conexao $conexao, Endereco $endereco)
        {
            try{
                $conn = $conexao->conectar();//abrindo a conexão do banco
                $sql = "insert into endereco(codigo, rua, numero, cep) values('$endereco->codigo', '$endereco->rua', '$endereco->numero', '$endereco->cep')";//escrevi o script
                $result = mysqli_query($conn, $sql);//excuta a ação do script no banco
                
                mysqli_close($conn);//fechando a conexão com sucesso!

                if($result){
                    return "<br><br> Inserido com sucesso!";
                }
                return "<br><br> Não Inserido!";

            }
            catch(Exception $erro)
            {
                echo $erro;
            }//fim do catch

        }//fim do cadastrar
        
    }//fim da classe
?>