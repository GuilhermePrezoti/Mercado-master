<?php
    namespace PHP\Modelo;
    class Estoque{
    
        private string $nomeProduto;
        private string $qnt;
        private float $valorProd;

        function __construct( string $nomeProduto, string $qnt, float $valorProd){

            $this->nomeProduto = $nomeProduto;
            $this->qnt = $qnt;
            $this->valorProd = $valorProd;
        }//fim do construtor

        public function __get(string $variavel)
        {
            return $this->$variavel;
        }//fim do get

        public function __set(string $nomeVar, string $valor1) : void
        {
            $this->nomeVar = $valor1;
        }//fim do set

        public function __toString()  : string
        {  
            return "<br>Nome do Produto: ".$this->nomeProduto."<br> Quantidade: ".$this->qnt."<br> Valor: ".$this->valorProd;
        }

    }//fim da class
?>