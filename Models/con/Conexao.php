<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 14/08/18
 * Time: 20:24
 */

class Conexao
{
    private $servername = "172.18.0.2";
    private $username = "root";
    private $password = "root";
    private $database = "tournament";

    public function openConnection()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }

    }

    public function closeConnection() {

        $this->con = null;

    }
}

