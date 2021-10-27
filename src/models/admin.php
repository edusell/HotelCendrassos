<?php
namespace Daw;

class adminpdo
{

    private $sql;

    /**
     * Constructor de la classe imatges amb PDO
     *
     * @param array $config
     */
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

    /**
     * get et retorna la imatge amb l'id
     *
     * @param int $id
     * @return array imatge amb ["titol", "url"]
     */

    public function getreserva()
    {
        $query = "select r.id_reserva,r.num_ocupants,r.data_arribada,r.data_sortida, u.nom,u.cognom,u.tel,u.correu,h.id_habitacio,t.nom_tipus FROM reserva r, usuari u,reservahabitacio i,habitacio h,tipushabitacio t WHERE r.DNI=u.DNI AND r.id_reserva=i.id_reserva AND i.id_habitacio=h.id_habitacio AND h.id_tipus_habitacio=t.id_tipus;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetchALL(\PDO::FETCH_ASSOC);
    }

    public function gettipus(){
        $query = "select id_tipus,m_tipus,ocupants_tipus,preu,nom_tipus, desc_tipus from tipushabitacio;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetchALL(\PDO::FETCH_ASSOC);

    }

    public function dropreserva($ids){
        for($i=0;$i<count($ids);$i++){

            $stm = $conn->prepare("DELETE FROM reserva WHERE id_reserva = :ids ;");
            $sql = $stm->execute([':ids' => $ids[$i]]);
        
        }
    }
    
    public function getusers(){
        $query = "select DNI,Nom,Cognom,tel,correu,username,nom_departament FROM usuari, departament where id_departament_usuari=id_departament;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetchALL(\PDO::FETCH_ASSOC);

    }


    public function getdept(){
        $query = "SELECT id_departament,nom_departament,descripcio_departament FROM departament;";
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



