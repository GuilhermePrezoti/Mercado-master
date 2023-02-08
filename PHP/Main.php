<?php
    require_once('Modelo/Estoque.php');
    require_once('Modelo/Compra.php');
    require_once('Modelo/CadastroCliente.php');
    
    require_once('DAO/Conexao.php');
    require_once('DAO/EnderecoCli.php');
    require_once('DAO/CadastrarCli.php');

    use PHP\DAO\Conexao;
    use PHP\DAO\InserirEndereco;
    use PHP\Modelo\Endereco;
    use PHP\DAO\Cliente;


    $conec = new Conexao;
    echo $conec->conectar();

    //$enderecoCli = new Endereco(1,"rua sao rafael", "219", "123456");
    //$insertEnderec = new InserirEndereco();
    //echo $insertEnderec->Cadastrar($conec, $enderecoCli);


    $insertCli = new Cliente();
    echo $insertCli->CadastrarCli($conec, "cliente", "guigui", "1234321", 1, "123423", 6, 10);



    /*$estoqueLoja = new Estoque("Doritos", 2, 10);
    $estoqueNew = new Estoque("Fandangos", 1, 20.00);

    $clientCompra = new Compra("GuiDelas", "123", "31/01/2023", $estoqueLoja, 10,00);

    $clientNew = new Compra("Gabrielzin", "354535435", "01/01/01" , $estoqueNew, 20.00);

    echo $clientCompra;
    echo "<br><br>";
    echo $clientNew;

    $enderecoClient = new Endereco("Rua das Minas", "69", "12345678");
    $newClient = new CadastroClient("Allanzinho GamePlay", "994433114342", $enderecoClient, "12345", "50", 1000);

    echo $newClient;*/

?>