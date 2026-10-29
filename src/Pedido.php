<?php

class Pedido {
    private int $numero;
    private string $cliente;

    //$status é do tipo StatusPedido (a enumeração que criamos)e só aceitara as opções definidas nos cases
    private StatusPedido $status;

    public function__construct(int $numero, string $cliente, StatusPedido $status)
    {
        $this->numero $numero;
        $this->
    }
}