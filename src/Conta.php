<?php

class ContaCorrente
{
    private $tipoCorrente = 1;
    private $titular;
    private $saldoCorrente;
    private static $numeroDeContas = 0;



    public function tipoCorrente(int $tipoCorrente)
    {
        $this->tipoCorrente = $tipoCorrente;
        if ($tipoCorrente == 1){
            echo 'Tipo de conta: Corrente';

        }else
        {
            echo 'Tipo de conta: Poupança';
        }

    }
    public function __construct(Titular $titular)
    {
        $this->titular  = $titular;
        $this->saldoCorrente = 0;


        self::$numeroDeContas++;
    }
    public function __destruct()
    {
        self::$numeroDeContas--;
    }


    public static function recuperaNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }

    public function saca(float $valorASacar)
    {
        if ($valorASacar > $this->saldoCorrente){
            echo 'Saldo indisponivel';

        }
        $this->saldoCorrente -=$valorASacar;
    }
    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldoCorrente += $valorADepositar;
    }
    public function transferir(float $valorATransferir, ContaCorrente $contaCorrenteDestino): void
    {
        if ($valorATransferir > $this->saldoCorrente){
            echo 'Saldo Indisponivel';
            return;
        }
        $this->sacar($valorATransferir);
        $contaCorrenteDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldoCorrente;
    }
    public function recuperaNomeTitular() : string
    {
        return $this->titular->recuperaNome();
    }
    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

}

class ContaPoupanca
{
    public $cpfPoupanca;
    public $nomePoupanca;
    public $saldoPopupanca;
}

