<?php


/* A interface define os metodos que cada classe DEVE implementar obrigatoriamente. Podemos dizer que interface é como um Contrato, em que as assinaturas (metodos) deverão ser honradas.

Usamos a interface para garantir que todas as classes que a utilizem, sigam um mesmo padrão definido nos metodos. Ainda assim, cada classe podera ter uma implementalçao diferente no corpo do metdo (polimorfismo). */
interface Notificador
{
    /* O padrão definido aqui é: nome, parâmetros, tipo de dados dos parâmetro e tipo de retorno do metodo */
    public function enviar(string $mensagem): string;
}