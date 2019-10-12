<?php

use PHPUnit\Framework\TestCase;
use SorteioJogos\MegaSena;

final class MegaSenaTest extends TestCase
{
    public function testQuantidadeDezenasMinimo()
    {
        $this->expectException(InvalidArgumentException::class);
        $megaSena = new MegaSena(5, 1);
    }

    public function testQuantidadeDezenasMaximo()
    {
        $this->expectException(InvalidArgumentException::class);
        $megaSena = new MegaSena(11, 1);
    }
}
