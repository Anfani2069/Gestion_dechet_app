<?php
/**
 * Created by IntelliJ IDEA.
 * User: MOUSTOIFA
 * Date: 9/26/2018
 * Time: 8:27 AM
 */

class DB {

    private $DB_HOST = "anfani.km";
    private $DB_NAME = "hackathon";
    private $DB_USER = "root";
    private $DB_PASSWORD = "";
    private $db;
// "localhost","hackathon","root",""
    /**
     * DB constructor.
     * @param null $DB_HOST
     * @param null $DB_NAME
     * @param null $DB_USER
     * @param null $DB_PASSWORD
     */
    public function __construct( $DB_HOST = NULL, $DB_NAME = NULL, $DB_USER = NULL, $DB_PASSWORD = NULL) {
        if ($DB_HOST != NULL){
            $this->DB_HOST = $DB_HOST;
            $this->DB_NAME = $DB_NAME;
            $this->DB_USER = $DB_USER;
            $this->DB_PASSWORD = $DB_PASSWORD;
        }

        try{
            $this->db = new PDO("mysql:dbname=". $this->DB_NAME ."; host=". $this->DB_HOST ."", $this->DB_USER, $this->DB_PASSWORD, array(
                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
            ));
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        }catch (PDOException $e){
             print "Echec lors de la connexion : ";
             print "<br><br>Error ! : ". $e->getMessage();
             die();
        }
    }

    /**
     * this is a query
     * @param $statement
     * @param array $attributes
     * @param bool $one
     * @return array|mixed
     */
    public function queryF( $statement, $attributes = array(), $one = false){
        $req = $this->db->prepare($statement);
        $req->execute($attributes);
        if ($one){
            $datas = $req->fetch(PDO::FETCH_OBJ);
        }else{
            $datas = $req->fetchAll(PDO::FETCH_OBJ);
        }
        return $datas;
    }


    /**
     * Prépare une requête à l'exécution et retourne un objet
     * @param $statement
     * @param array $attributes
     * @param bool $one
     * @return array|mixed
     */
    public function prepare( $statement, $attributes = array(), $one = false){
        $req = $this->db->prepare($statement);
        $req->execute($attributes);
        if ($one){
            $datas = $req->fetch(PDO::FETCH_OBJ);
        }else{
            $datas = $req->fetchAll(PDO::FETCH_OBJ);
        }
        return $datas;
    }


}