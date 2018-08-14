<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 13/08/18
 * Time: 20:03
 */

class Usuario
{
    private $email;
    private $senha;
    private $username;

    public function guardaSaporraToda($em, $sen, $user)
    {
        $this->username = $user;
        $this->email = $em;
        $this->senha = $sen;
    }

    public function mostraSaporraToda()
    {
        echo $this->username. "<br>";
        echo $this->email. "<br>";
        echo $this->senha. "<br>";
    }
}
