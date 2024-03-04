<?php

class Product
{

    private $descricao = "";
    private $estoque = 0;
    private $markup = 0.00;
    private $precoCompra = 0.00;
    private static $instancias = 0;


    public function __construct(
        $descricao = "",
        $estoque = 0,
        $markup = 0.00,
        $precoCompra = 0.00

    ) {
        $this->setdescricao($descricao);
        $this->setdescricao($estoque);
        $this->setmarkup($markup);
        $this->setmarkup($precoCompra);

        self::$instancias++; // ver esse código
    }


    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($valor) // sets com valores 
    {
        $this->descricao = $valor;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setEstoque($valor) // sets com $valor
    {
        $this->estoque = $valor;
    }

    public function getMarkup()
    {
        return $this->markup;
    }
    public function setMarkup($valor) // sets com $valor
    {
        $this->markup = $valor;
    }
    public function getPrecoCompra()
    {
        return $this->precoCompra;
    }
    public function setPrecoCompra($valor) // sets com $valor
    {
        $this->precoCompra = $valor;
    }


    public function precoVenda()
    {
        return $this->getPrecoCompra() +
            ($this->getPrecoCompra() * ($this->getMarkup() / 100)); // ver e conferir 
    }

    public static function instancias()
    {
        return self::$instancias; // retorna o numero de instancias que essa classe foi submetida 
    }
}

final class ProdutoTributado extends Product
{

    private $imposto = 0.00;

    public function precoVenda()
    {
        $precovenda = parent::precoVenda(); // parent para puxar o objeto da classe pai 
        $tributado = $precovenda + (($this->imposto / 100) * $precovenda); // conferir 
        return $tributado;
    }
}


$p1 = new Product();
echo Product::instancias($contador), PHP_EOL;
$p2 = new Product();
echo Product::instancias($contador), PHP_EOL;
echo $contador;
