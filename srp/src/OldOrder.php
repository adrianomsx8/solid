<?php
//classe sem srp
// viola o SRP porque realiza 3 tipos distintos de tarefas
//lidar com as informações do pedido
// responsável pela exibição e manipulação dos dados

class OldOrder
{
    public function calculateTotalSum(){/*...*/}
    public function getItems(){/*...*/}
    public function getItemCount(){/*...*/}
    public function addItem($item){/*...*/}
    public function deleteItem($item){/*...*/}

    public function printOrder(){/*...*/}
    public function showOrder(){/*...*/}

    public function load(){/*...*/}
    public function save(){/*...*/}
    public function update(){/*...*/}
    public function delete(){/*...*/}
}