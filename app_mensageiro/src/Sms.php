<?php

namespace src;

class Sms implements IMensagemToken{
    public function enviar (): void {
       echo 'SMS : seu token é 888.222';
    }
}