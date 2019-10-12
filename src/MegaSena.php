<?php

namespace SorteioJogos;

class MegaSena
{
    private $quantidadeDezenas;
    private $resultado;
    private $totalJogos;
    private $jogos;

    public function __construct(int $quantidadeDezenas, int $totalJogos)
    {
        $this->validarQuantidadeDezenas($quantidadeDezenas);

        $this->quantidadeDezenas = $quantidadeDezenas;
        $this->totalJogos = $totalJogos;
        $this->resultado = array();
        $this->jogos = array();
    }

    private function validarQuantidadeDezenas(int $quantidadeDezenas)
    {
        if ($quantidadeDezenas < 6 || $quantidadeDezenas > 10) {
            throw new \InvalidArgumentException('A quantidade de dezenas deve ser um valor entre 6 e 10.');
        }
    }

    private function gerarDezenas(int $quantidadeDezenas)
    {
        $dezenas = array();

        while (count($dezenas) < $quantidadeDezenas) {
            $dezena = rand(1, 60);

            if (!in_array($dezena, $dezenas)) {
                array_push($dezenas, $dezena);
            }
        }

        sort($dezenas);

        return $dezenas;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function getJogos()
    {
        return $this->jogos;
    }

    public function setQuantidadeDezenas(int $quantidadeDezenas)
    {
        $this->validarQuantidadeDezenas($quantidadeDezenas);

        $this->quantidadeDezenas = $quantidadeDezenas;
    }

    public function setTotalJogos(int $totalJogos)
    {
        $this->totalJogos = $totalJogos;
    }

    public function gerarJogos()
    {
        $jogosGerados = array();

        for ($i = 0; $i < $this->totalJogos; $i++) {
            $jogo = $this->gerarDezenas($this->quantidadeDezenas);

            array_push($jogosGerados, $jogo);
        }

        $this->jogos = $jogosGerados;
    }

    public function sortearDezenas()
    {
        $quantidadeDezenasSorteio = 6;

        $this->resultado = $this->gerarDezenas($quantidadeDezenasSorteio);
    }

    public function conferirJogos()
    {
        $htmlFinal = '<html><body><table border="1" cellpadding="5px" align="center">';
        $htmlFinal .= sprintf('<tr><td colspan="%s" align="center">Resultado Jogos</td></tr>', $this->quantidadeDezenas + 1);
        $htmlFinal .= sprintf('<tr><td colspan="%s" align="center">Jogo</td><td>Acertos</td></tr>', $this->quantidadeDezenas);

        foreach ($this->jogos as $jogo) {
            $celulasJogos = implode('</td><td>', $jogo);
            $quantidadeAcertos = count(array_intersect($jogo, $this->resultado));

            $htmlFinal .= sprintf('<tr><td align="center">%s</td><td align="center">%s</td></tr>', $celulasJogos, $quantidadeAcertos);
        }

        $htmlFinal .= '</html></body>';

        return $htmlFinal;
    }
}
