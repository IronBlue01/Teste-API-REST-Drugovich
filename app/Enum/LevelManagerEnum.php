<?php

namespace App\Enum;

enum LevelManagerEnum: int implements TipoInterface
{   
    case GERENTE_FINANCEIRO = 1;
    case GERENTE_GERAL      = 2;
    case GERENTE_ADMINISTRATIVO = 3;

    public function id(): int
    {
        return match ($this) {
            self::GERENTE_FINANCEIRO     => 1,
            self::GERENTE_GERAL          => 2,
            self::GERENTE_ADMINISTRATIVO => 3
        };
    }

    public function descricao(): string
    {
        //...        
    }
}