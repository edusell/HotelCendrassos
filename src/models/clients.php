<?php
namespace Daw;

class llistartipushab

{
    private $sql;

    public function __construct($config)
    {
        $dsn = "mysql:dbname={$config['dbname']};host={$config['host']}";
        $usuari = $config['user'];
        $clau = $config['pass'];

    
        try {
            //$conn = new PDO($dsn,$user,$pass);
            $this->sql = new \PDO($dsn, $usuari, $clau);


        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage() . " $usuari");
        }
    }


    public function llistarhab(){
        $query = "SELECT * FROM tipushabitacio;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }

        return $stm->fetchALL(\PDO::FETCH_ASSOC);
    }


}

?>