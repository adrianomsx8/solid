<?php

class FolhaDePagamento
{
    protected $saldo;
    
    public function calcular(Remuneravel $funcionario)
    {
        $this->saldo = $funcionario->remuneracao();
    }
}