<?php

namespace src;

class Whatsapp implements IMensagemToken{
    public function enviar (): void {
       echo 'what : seu token é 888.222';
    }
}