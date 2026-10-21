<?php
// src/Filme.php

// Filme é uma subclasse que HERDA da superclasse Conteudo
class Filme extends Conteudo
{  
    //Propriedade especifica da classe Filme
    private int $duracao;

    //Metodo construtor especifico da subclasse Filme
    //Responsavel por receber os valores no momento da criação de objeto Filme (Incluindo a duração,)
    public function __construct(string $titulo, string $genero, int $ano, int $duracao)
    {
        /*Chamamos o construtor da superclasse (classe pai) usando o parent::__construct(). Isso é necessario pois estes valores pertecem as propriedades da classe pai*/
        parent::__construct($titulo, $genero, $ano);

        //Ja quanto a duração, fazemos a atribuição aqui mesmo (afinal, $duração é de Filme)
        $this->duracao = $duracao;
    }
}



