<?php
    namespace PHP\Modelo;
    
    class CadastroClient{
        private string $nomeClient;
        private string $telefoneClient;
        private Endereco $endereco;
        private string $cpfClient;
        private string $qntCompra;
        private float $valorGasto;

        function __construct(string $nomeClient, string $telefoneClient, Endereco $endereco, string $cpfClient, string $qntCompra, float $valorGasto){
            $this->nomeClient = $nomeClient;
            $this->telefoneClient = $telefoneClient;
            $this->endereco = $endereco;
            $this->cpfClient = $cpfClient;
            $this->qntCompra = $qntCompra;
            $this->valorGasto = $valorGasto;

        }//fim do construtor

        public function __get(string $var)
        {
            return $this->$var;
        }//fim do get

        public function __set(string $receba, $valor) : void
        {
            $this->receba = $valor;
        }//fim do set


        public function __toString() : string
        {
            return "<br> Nome do Cliente Cadastrado: ".$this->nomeClient."<br> Telefone Cadastrado: ".$this->telefoneClient."".$this->endereco."<br> CPF Cadastrado: ".$this->cpfClient."<br> Quantidade de Compra: ".$this->qntCompra."<br> Valor Gasto no Mercado: ".$this->valorGasto;
            
        }
    }//fim da classe



?>