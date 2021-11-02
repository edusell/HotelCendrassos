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
    public function adduseradmin($mail,$nom,$cnom,$dni,$tel,$usuari,$pass,$rol){
        $i =0;
        $err = array();
        $caracters_dni=strlen($dni);
        $caracts_numero_tlf=false;
        $errvalid=false;
        $permitidos = "0123456789";
        for ($a=0; $a<strlen($tel); $a++){
            if (strpos($permitidos, substr($tel,$a,1))==false){
                $err['tel']=1;
                //$err[$i]='Numero telefon incorrecte';
               // $i++;
            }
        }

       
        $stm1 = $this->sql->prepare("select COUNT(*) from usuari where DNI = :dni;");
        $sql1 = $stm1->execute([
          ':dni' => $dni
        ]);

        $stm1 = $this->sql->prepare("select COUNT(*) from usuari where usuari = :user;");
        $sql2 = $stm1->execute([
          ':user' => $usuari
        ]);
            

        if(strlen($dni)<9){
            $err[$i]='El dni es incorrecte';
            $i++;
            print("Error");
            die();
        }
    
        if(strlen($tel)!=9){
            $err[$i]='El telefon es incorrecte';
            $i++;
            print("Error telefon");
            die();
           
        
        }
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $err[$i]='El Correu electronic es incorrecte';
             $i++;
             print("Error email");
            die();
        }
        if(!checkdnsrr(array_pop(explode("@",$mail)),"MX")){
            $err['mail']=1;
            $err[$i]='El Correu electronic es incorrecte 1';
            print("Error domini");
            die();

        }
        //if(count($sql1)>0){
            //$err['dni']=1;
       // }

        if(count($err)== 0){
            $insert = $this->sql->prepare("INSERT INTO `usuari` (`DNI`, `Nom`, `Cognom`, `tel`, `correu`, `rol`, `username`, `password`, `id_departament_usuari`) VALUES ( :dni , :nom, :cognom, :tel , :mail , '0' , :usuari , :pass , :rol);");
            $sql = $insert->execute([
                ':dni' => $dni,
                ':nom' => $nom,
                ':cognom' => $cnom,
                ':usuari' => $usuari,
                ':mail' => $mail,
                ':tel' => $tel,
                ':pass' => $pass,
                ':rol' => $rol
            ]);
        }       

        return $err;


    }

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

            $query = "DELETE FROM reserva WHERE id_reserva = :ids ;";
            $stm = $this->sql->prepare($query);
            $result = $stm->execute([':ids' => $ids[$i]]);
        
        }
    }

    public function dropdept($ids){
        for($i=0;$i<count($ids);$i++){

            $query = "DELETE FROM departament WHERE id_reserva = :ids ;";
            $stm = $this->sql->prepare($query);
            $result = $stm->execute([':ids' => $ids[$i]]);
        
        }
    }

    public function dropuser($ids){
        for($i=0;$i<count($ids);$i++){

            $query = "DELETE FROM usuari WHERE DNI = :ids ;";
            $stm = $this->sql->prepare($query);
            $result = $stm->execute([':ids' => $ids[$i]]);
        
        }
    }

    public function droptipus($ids){
        for($i=0;$i<count($ids);$i++){

            $query = "DELETE FROM tipushabitacio WHERE id_tipus = :ids ;";
            $stm = $this->sql->prepare($query);
            $result = $stm->execute([':ids' => $ids[$i]]);
        
        }
    }

    public function creartipus($id,$m,$servei,$omax,$descripcio,$nom,$preu,$directori){
       
    $stm = $this->sql->prepare("INSERT INTO tipushabitacio (id_tipus, m_tipus, serveis_tipus, ocupants_tipus, desc_tipus, nom_tipus, id_hotel_tipus, preu,imatge) VALUES ( :id , :m , :serveis , :omax , :descripcio , :nom , '1', :preu , :img );");
    $sql = $stm->execute([
    ':id' => $id,
    ':m' => $m,
    ':serveis' => $servei,
    ':omax' => $omax,
    ':descripcio' => $descripcio,
    ':nom' => $nom,
    ':preu' => $preu,
    ':img' =>$directori,
    ]);
    }

    public function ultimidtipus(){
        $query = "select id_tipus from tipushabitacio order by id_tipus desc limit 1;";
        $stm = $this->sql->prepare($query);
        $stm->execute();
        $result = $stm->fetchColumn();
        //print_r($result);
        return $result;
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


    public function getrol(){
        $query = "select id_departament,nom_departament from departament;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetchALL(\PDO::FETCH_ASSOC);

    }
    public function getdeptid(){
        $query = "select id_departament from departament order by id_departament desc limit 1;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        

        return $stm->fetchALL(\PDO::FETCH_ASSOC);
    }

    public function adddept($id,$nom,$desc){
        $query = "INSERT INTO `departament` (`id_departament`, `nom_departament`, `descripcio_departament`, `id_hotel_departament`) VALUES ( :id, :nom , :d , '1');";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':id'=> $id,
            ':nom' => $nom,
            ':d' => $desc
        ]);

    }
    

  
}



