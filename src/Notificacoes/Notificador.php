<?php

//Namespace princial/raiz:App (Pode ser qualquer nome)
//Seguindo de \ e o nome do subnamespace (nome da pasta)
namespace App\Notificacoes;

interface Notificador
{
    public function enviar(string $mensagem): string;
    
    public static function getQuantidadeEnviada(): int;
}