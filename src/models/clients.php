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

    //Sesions
    /*public function __construct(){
        session_start();
    }*/

   
    public function get($id){
        return $_SESSION[$id];
    }


    public function set($id, $value){
        $_SESSION[$id] = $value;
    }

    //Validacio de usuaris contra la base de dades 
    public function getUser($user)
    {
        //$user = $_POST['usuari'];
        //$pass= $_POST['password'];

        $query = 'select  DNI,Nom,password,username,rol,id_departament_usuari from usuari where username=:user;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':user' => $user ]);
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    //Retornar valors del usuari en el panell usuari

    public function getdadesUser($dni)
    {
        
        $query = 'select  DNI,Nom,password,username,rol,id_departament_usuari from usuari where DNI=:dni;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':dni' => $dni ]);
           // print_r($stm->fetch(\PDO::FETCH_ASSOC));
        //die();
        return $stm->fetch(\PDO::FETCH_ASSOC);
       
    }

}
