<?php

require_once __DIR__ . '/Notificador.php';

class NotificadorEmail implements Notificador
{
    /* Implementação do metdo enviar de acordo com os padrões definidos na Interface: mesmo nome, mesma quantidade de parâmetros, mesmo tipo de dados dos parâmetros, mesmo tipo de retorno esperado */
    public function enviar(string $mensagem): string
    {
        /* Corpo de metodo: detalhes da implementação PODEM ser do jeito que quisermos */
        return "E-mail enviado: {$mensagem}";
    }
}