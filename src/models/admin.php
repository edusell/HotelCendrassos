<?php

class adminpdo{

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
    public function llistarreserves()
    {
        $query = "select r.id_reserva,r.num_ocupants,r.data_arribada,r.data_sortida, u.nom,u.cognom,u.tel,u.correu,h.id_habitacio,t.nom_tipus FROM reserva r, usuari u,reservahabitacio i,habitacio h,tipushabitacio t WHERE r.DNI=u.DNI AND r.id_reserva=i.id_reserva AND i.id_habitacio=h.id_habitacio AND h.id_tipus_habitacio=t.id_tipus;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute();

        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

}
