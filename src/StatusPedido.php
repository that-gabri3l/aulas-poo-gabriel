<?php


//Cada case reposenta um status permitido e possuiu um valor/texti associado, que você pode escrever como quiser (acentod, espaços, cedilha)

enum StatusPedido: string
{
    case Pendente = "Pendente";
    case AguardandoPagamento = "Aguardando pagamento";
    case Pago = "Pago";
    case EmPreparacao = "Em preparação";
    case SaiuParaEmtrega = "Saiu para entraga";
}