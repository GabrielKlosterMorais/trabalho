<?php

abstract class Cliente{ // Declara a classe cliente
    public string $email; // declara o atributo email
    public string $nomeCliente; // declara o atributo nomeCliente
    protected string $tipoCliente; // declara o atributo tipoCliente

    public function __construct(string $email, string $nomeCliente, string $tipoCliente) 
    {
        $this->email = $email;
        $this->nomeCliente = $nomeCliente;
        $this->tipoCliente = $tipoCliente;
    }

    // abstract public function desconto(float $valor): float;
}

class ClienteNormal extends Cliente{
    public function calcular(float $valor): float {
        return $valor + 0;
    }

}

class ClientePreumium extends Cliente{
    public function calculoDesconto(float $valor): float {
        return $valor * 0.5 ;
    }
}

class Produto{
    private string $nomeProduto;
    public float $preco;
    private int $estoque;

    public function __construct($nomeProduto, $preco, $estoque)
    {
        $this->nomeProduto = $nomeProduto;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function valor(): void {
        $this->preco += 20;
        echo "{$this->nomeProduto} está a custando {$this->preco} km/h<br>";
    }

    public function info(): void {
        echo "Nome: {$this->nomeProduto}<br>";
        echo "preço: {$this->preco}<br>";
    }
}



?>