<?php

  class DB {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'toutbois';
    private $db;


    public function __construct($host = null, $username = null, $password = null, $database = null) {
      if($host != null){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
      }

      try{
        $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(
          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));
        //echo 'Connecté';
      } catch(PDOException $e){
        die('Impossible de se connecter à la base de donnée !');
      }


    }

    public function query($sql, $data = array()) {
      $req = $this->db->prepare($sql);
    	$req->execute($data);
    	return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public function query2($sql) {
      $req = $this->db->prepare($sql);
    	$req->execute();
    }

    public function query3($sql) {
      $req = $this->db->prepare($sql);
    	$req->execute();
      return $req;
    }

    public function nbArticle($sql) {
      $req = $this->db->prepare($sql);
    	$req->execute();
    	return $req->fetchColumn();
    }

    public function connect($sql) {
      $req = $this->db->prepare($sql);
    	$req->execute();
      return $req->fetchAll(PDO::FETCH_OBJ);
    }

  }
