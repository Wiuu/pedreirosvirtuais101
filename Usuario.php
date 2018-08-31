<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 31/08/18
 * Time: 19:29
 */

class Usuario
{

    private $email;
    private $cu;

    public function guardarSenha($umDadoDigitadoQualquer)
    {
        $this->cu = $umDadoDigitadoQualquer;
    }

    public function guardarEmail($umDadoDigitadoQualquer2)
    {
        $this->email = $umDadoDigitadoQualquer2;
    }

    public function mostraOsqueeuTenho()
    {
       echo 'esse sao os dados:'. $this->email.' e '. $this->cu;
    }

}
