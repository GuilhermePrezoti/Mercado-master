<?php
    namespace PHP\DAO;
    require_once('Conexao.php');

    class Cliente{

        public function CadastrarCli(Conexao $conexao,string $nomeTabela, string $nome, string $telefone, int $endereco, string $cpf, int $qnt, int $valorGasto){
            
            try
            {
                $conn   = $conexao->conectar();
                $sql    = "insert into $nomeTabela (cod, nome, telefone, endereco, cpf, qnt, valorGasto) values('', '$nome', '$telefone', '$endereco', '$cpf', '$qnt', '$valorGasto')";
                $result = mysqli_query($conn, $sql);

                if($result)
                {
                    echo "Dados do Cliente inseridos com sucesso!";
                    return;
                }//fim do if
                return "Ops, tente Novamente!";
            }//fim do try

            catch(Exception $erro)
            {
                return $erro;
            }//fim do catch

        }//fim da função

    }//fim da class


?>