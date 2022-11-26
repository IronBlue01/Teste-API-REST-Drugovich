<?php

namespace App\Enum;
/**
 * @SuppressWarnings(PHPMD.ShortMethodName)
 */
interface TipoInterface
{
    public function id(): int;
    public function descricao(): string;
}