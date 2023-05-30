<?php

class Conta
{
    private $tipoCorrente = 1;
    private $titular;
    private $saldo;
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
        $this->saldo = 0;


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
        if ($valorASacar > $this->saldo){
            echo 'Saldo indisponivel';

        }
        $this->saldo -=$valorASacar;
    }
    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo 'Saldo Indisponivel';
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
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

