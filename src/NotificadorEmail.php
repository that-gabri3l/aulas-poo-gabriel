<?php

require_once __DIR__ . '/Notificador.php';

class NotificadorEmail implements Notificador
{
    //contador de envios 
    private static int $quantidadeEnviada = 0;
        //return self::$quantidadeEnviada;
        
        
        public function enviar(string $mensagem): string
        {
            //acessar a propriedade estatica
            /* sempre que ocorrer o acionamento do metodo enviar, atualizaremos a propriedade estatica da classe */ 
            self::$quantidadeEnviada++;
            return "E-mail enviado: {$mensagem}";
            }

            /*Usaremos um getter estatico para ter acesso ao total de envios feitos */
            public static function getQuantidadeEnviada(): int{
                return self::$quantidadeEnviada;
            }
}