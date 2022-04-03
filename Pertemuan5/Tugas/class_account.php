<?php
class Akun{
//property
    public $nmr_akun;
    public $pemilik;
    public $saldo;

//method atau function
    function __construct($nmr_akun,$pemilik,$saldo){
        $this->no_akun=$nmr_akun;
        $this->pemilik=$pemilik;
        $this->saldo=$saldo;
    }
}
?>