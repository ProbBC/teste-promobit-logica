<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $colors = [];

        foreach (self::products as $product) {
            $color = explode('-', $product)[0];
            $variation = explode('-', $product)[1];
            
            // Cria uma key com o nome da cor, caso a mesma ainda não exista no array
            if (!array_key_exists($color, $colors)){
                $colors[$color] = [];
            }

            // Se a variação já existe, incrementa
            // Senão, cria uma key com a sigla da variação com o valor 1
            if (array_key_exists($variation, $colors[$color])) {
                $colors[$color][$variation]++;
            } else {
                $colors[$color][$variation] = 1;
            }
        }
        return $colors;
    }
}