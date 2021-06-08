<?php

class ContratoClt
{
    public function salario()
    {
        //...
    }
}

class Estagio
{
    public function bolsaAuxilio()
    {
        //...
    }
}

//essa classe não deve ser modificada caso seja
//necessario adicionar mais de um cargo
class FolhaDePagamento
{
    protected $saldo;
    
    public function calcular($funcionario)
    {
        if ( $funcionario instanceof ContratoClt ) {
            $this->saldo = $funcionario->salario();
        } else if ( $funcionario instanceof Estagio) {
            $this->saldo = $funcionario->bolsaAuxilio();
        }
    }
}