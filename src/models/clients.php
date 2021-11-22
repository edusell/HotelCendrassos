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
       
        //print_r($_SERVER['HTTP_REFERER']);
        //die();
        //$user = $_POST['usuari'];
        //$pass= $_POST['password'];

        $query = 'select  DNI,Nom,password,username,rol,id_departament_usuari from usuari where username=:user;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':user' => $user ]);
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }


    public function getdadesUser($dni)
    {
        
        $query = 'select  DNI,Nom,password,Cognom,tel,correu,username,rol,id_departament_usuari from usuari where DNI=:dni;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':dni' => $dni ]);
           // print_r($stm->fetch(\PDO::FETCH_ASSOC));
        //die();
        return $stm->fetch(\PDO::FETCH_ASSOC);
       
    }

    public function calendari(){

        $query = "select data_in_tencament from calendari;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        $marcar = $stm->fetchAll();
        


        $mes = ['gener','febrer','març','abril','maig','juny','juliol','agost','septembre','octubre','novembre','desembre'];
        $nums = ['31','28','31','30','31','30','31','31','30','31','30','31'];

        $arr=[0=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,31=>0],1=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,],2=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,31=>0],3=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,],4=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,31=>0],5=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,],6=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,31=>0],7=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,31=>0],8=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,],9=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,],10=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,],11=>[0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,31=>0]];

        $avui =getdate();
        
        for($y=0;$y<$avui['mon']-1;$y++){
            for($i=0;$i<32;$i++){
               $arr[$y][$i]=2;
            }
        }
        
          
            for($y=0;$y<$avui['mday'];$y++){
                   $arr[$avui['mon']-1][$y]=2;
            }
        
        $arr[$avui['mon']-1][$avui['mday']]=3;

        for($i=0;$i<count($marcar);$i++){
            $d = $marcar[$i]['data_in_tencament'];
           
            $t= explode('-',$d);
            $mt = (int)$t[1];
            $dt = (int)$t[2];
           

            $arr[$mt-1][$dt]=1;

        }

        return $arr;
    }
    public function getpanellreserva($dni)
    {
        $query = 'select  r.id_reserva,r.num_ocupants,r.data_arribada,r.data_sortida,r.DNI,r.preu,t.nom_tipus,t.imatge,t.m_tipus,t.desc_tipus from reserva r, tipushabitacio t where r.id_tipus_reserva = id_tipus AND DNI=:dni;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':dni' => $dni ]);
           // print_r($stm->fetch(\PDO::FETCH_ASSOC));
        //die();
        return $stm->fetchall(\PDO::FETCH_ASSOC);
       
    }
    public function cambiacontrasenya($dni,$nova_contrasenya)
    {
        
        $query = 'UPDATE usuari SET password=:nova where DNI=:dni';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':nova' => $nova_contrasenya,
            ':dni' => $dni
        ]);

           // print_r($stm->fetch(\PDO::FETCH_ASSOC));
        //die();
        return $stm->fetchall(\PDO::FETCH_ASSOC);
       
    }
    public function cambiadades($dni,$correu,$telefon)
    {
        
        
        $query = 'UPDATE usuari SET correu=:correu ,tel=:telefon where DNI=:dni';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':correu' => $correu,
            ':dni' => $dni,
            ':telefon' => $telefon
        ]);

           // print_r($stm->fetch(\PDO::FETCH_ASSOC));
        //die();
        return $stm->fetchall(\PDO::FETCH_ASSOC);
       
    }
    public function reserves($entrada,$sortida,$ocupants)
    {
        $query = 'select count(h.id_habitacio) as num,h.id_tipus_habitacio FROM habitacio h, tipushabitacio t where h.id_tipus_habitacio=t.id_tipus AND t.ocupants_tipus>= :ocupants group by h.id_tipus_habitacio;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':ocupants' => $ocupants
        ]);

        $hd = $stm->fetchall(\PDO::FETCH_ASSOC);

        //select count(r.id_reserva),r.id_tipus_reserva from reserva r, tipushabitacio t where r.id_tipus_reserva=t.id_tipus AND ((r.data_arribada> '2021-11-17' AND r.data_arribada< '2021-11-22') OR (r.data_sortida> '2021-11-17' AND r.data_sortida< '2021-11-22') OR (r.data_arribada <= '2021-11-17' AND r.data_sortida>= '2021-11-22')) group by id_tipus_reserva;
        $query1 = "select count(r.id_reserva) as ocupades,r.id_tipus_reserva from reserva r, tipushabitacio t where r.id_tipus_reserva=t.id_tipus AND ((r.data_arribada> :entrada AND r.data_arribada< :sortida ) OR (r.data_sortida> :entrada AND r.data_sortida< :sortida ) OR (r.data_arribada <= :entrada AND r.data_sortida>= :sortida )) group by id_tipus_reserva;";
        $stm1 = $this->sql->prepare($query1);
        $result1 = $stm1->execute([
            ':entrada' => $entrada,
            ':sortida' => $sortida
        ]);

        $ho = $stm1->fetchall(\PDO::FETCH_ASSOC);

        $query = 'select id_tipus_habitacio ,count( id_habitacio) as numd,t.m_tipus,t.serveis_tipus,t.ocupants_tipus,t.desc_tipus,t.nom_tipus,preu,imatge from habitacio h, tipushabitacio t where h.id_tipus_habitacio=t.id_tipus  group by id_tipus_habitacio;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        $info = $stm->fetchall(\PDO::FETCH_ASSOC);

        //print_r ($info);
        //print_r ($hd);
        //print "---------------";

        //rint_r ($ho);

        //print_r ($ho);


        $index =0;
        for($i =0;$i<count($hd);$i++){
            if($ho != NULL){
                $tmpid=-1;                

            for($y =0;$y<count($ho);$y++){
                if($ho[$y]['id_tipus_reserva']==$hd[$i]['id_tipus_habitacio']){
                    $tmpid=$y;
                    break;
                }
            }
            if($tmpid!=-1){
                $tmp = $hd[$i]['num']-$ho[$tmpid]['ocupades'];
                if($tmp>0){
                    $fin[$index] = $hd[$i]['id_tipus_habitacio'];
                    $index++;
                }
            } else {
                if($hd[$i]['num']>0){
                    $fin[$index] = $hd[$i]['id_tipus_habitacio'];
                    $index++;
                }
            }

        }else {
           $fin[$index] = $hd[$i]['id_tipus_habitacio'];
           $index++;
        }
    }
    

    if($fin !=NULL){
        for($i =0;$i<count($fin);$i++){
            $ret[$i] = $info[$fin[$i]-1];
        }
    }

        $query = 'select data_in_tencament as tenc from calendari;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        $festius = $stm->fetchall(\PDO::FETCH_ASSOC);

        for($i=0;$i<count($festius);$i++){
            if($festius[$i]['tenc'] <= $sortida && $festius[$i]['tenc'] >= $entrada){
                $ret[0]['errfest']='si';
            }
        }

        return $ret;
       
    }

    public function resumreserva($id)
    {
        
        
        $query = 'select * from tipushabitacio where id_tipus= :id';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':id' => $id
        ]);


        

           // print_r($stm->fetch(\PDO::FETCH_ASSOC));
        //die();
        return $stm->fetchall(\PDO::FETCH_ASSOC);
       
    }

    public function reserva($dias,$arribada,$sortida,$id,$dni,$ocupants)
    {

        $query = "select preu from tipushabitacio where id_tipus= :id;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':id' => $id
        ]);
        
        $preu = $stm->fetch(\PDO::FETCH_ASSOC)['preu']*($dias);

        $query = 'select h.id_habitacio FROM habitacio h , tipushabitacio t, reservahabitacio i, reserva r where t.id_tipus=h.id_tipus_habitacio AND h.id_habitacio=i.id_habitacio AND i.id_reserva=r.id_reserva AND h.id_tipus_habitacio= :id AND ( :entrada >=r.data_sortida OR ( :entrada <r.data_arribada AND :sortida <=data_arribada));';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':entrada' => $arribada,
            ':sortida' => $sortida,
            ':id' => $id
        ]);

        $idh = $stm->fetch(\PDO::FETCH_ASSOC)['id_habitacio'];

       $query = "INSERT INTO `reserva` (`id_reserva`, `num_ocupants`, `data_arribada`, `data_sortida`, `DNI`, `preu`, `id_tipus_reserva`) VALUES ( NULL , :ocupants , :arribada , :sortida , :dni , :preu , :id);";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            ':id' => $id,
            ':dni' => $dni,
            ':preu' => $preu,
            ':ocupants' => $ocupants,
            ':arribada' => $arribada,
            ':sortida' => $sortida
        ]);

        $query = "select id_reserva from reserva order by id_reserva desc limit 1;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
        ]);

        $return = $stm->fetchall(\PDO::FETCH_ASSOC)[0]['id_reserva'];

        $query = "INSERT INTO `reservahabitacio` (`id_reserva`, `id_habitacio`) VALUES ( :id, NULL);";
        $stm1 = $this->sql->prepare($query);
        $result = $stm1->execute([
            ':id' => $return 
        ]);

        return $return;
       
    }


}
