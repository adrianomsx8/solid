<?php

namespace src\extrator;

class Xlsx extends Arquivo{

    public function lerArquivo(string $caminho): array{
      
       //leitura

       return  $this->getDados();
    }

}