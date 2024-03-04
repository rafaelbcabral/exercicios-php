<?php
require_once '01.php';

class ItemVenda
{
    private $quantidade = 0;
    private $produto = null;


    public function __construct($quantidade, Product $produto)
    {
        $this->setQuantidade($quantidade);
        $this->setProduto($produto);
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($valor)
    {
        return $this->quantidade = $valor;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setProduto(Product $p) // nao entendi
    {
        return $this->produto = $p; // nao entendi
    }


    public function subtotal()
    {

        $sub = $this->getProduto()->precoVenda() * $this->getQuantidade();
        return $sub;
    }
}

$p = new Product('Guarana', 10, 10.00, 10.00);
$iv = new ItemVenda(5, $p);
echo $iv->subtotal();
