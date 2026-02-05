<?php

class NextOrder{
    public string $produtos;
    protected string $clienteNormal;
    public string $nomeCliente;
    protected string $clientePremium;
    private string $CPF;

    public function __construct($CPF, )
    {
        throw new \Exception('Not implemented');
    }
}

class Produto extends NextOrder{
    public string $nomeProduto;
    public float $preco;
    protected int $estoque;
    public string $cor;
    protected string $marca;


    public function __construct($nomeProduto, $preco, $estoque, $marca, $cor)
    {
        $this->nomeProduto = $nomeProduto;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->marca = $marca;
        $this->cor = $cor;
    }

    public function valor(): void {
        $this->preco += 20;
        echo "{$this->nomeProduto} está a custando {$this->preco} km/h<br>";
    }

    public function info(): void {
        echo "Marca: {$this->marca}<br>";
        echo "Nome: {$this->nomeProduto}<br>";
        echo "preço: {$this->preco}<br>";
    }
}





?>