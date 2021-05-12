<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    /*public function testEstouFuncionando(){
        $valor = 10;
        $this->assertEquals($valor, 11);
    }*/

    public function testEstadoInicialItem(){
       $item = new Item();

      // $item->getDescricao() == '';
      // $item->getValor() == 0;

       //$this->assertEquals(<valor esperado>, <valor atual>);
 
       $this->assertEquals('', $item->getDescricao());
       $this->assertEquals(0, $item->getValor());
    }

    public function testGeteSetDescricao(){
        $descricao = 'Cadeira de plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals( $descricao, $item->getDescricao());
    } 

   
    
    public function testItemValido(){
        $item = new Item();
        $item->setValor(55);
        $item->setDescricao('Cadeira de plástico');
        $this->assertEquals(true, $item->itemValido());
    
        $item->setValor(55);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
   
        $item->setValor(0);
        $item->setDescricao('Cadeira de plástico');
        $this->assertEquals(false, $item->itemValido());
 
        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
 
    }
    /**
     * @dataProvider dataValores
     */
    public function testGeteSetValor($valor){
       // $valor = 35.42;

        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals( $valor, $item->getValor());
    }

    public function dataValores(){
        return [
            [100],
            [-2],
            [0]
        ];
    }

}