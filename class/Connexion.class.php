<?php

class Connexion {

    private $_db;
    private $_dsn = 'mysql:host=localhost;dbname=dmdbtest;charset=utf8';
    private $_user = 'adminsql';
    private $_password = 'mdpsql';
    private $_options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    private $_tablePost;

    public function __construct() {
        $this->_db = new PDO($this->_dsn, $this->_user, $this->_password, $this->_options);
        $this->_tablePost = 'post';
        //require 'Post.class.php';
    }

    public function addPost($postObject) {
        $sql = "INSERT INTO $this->_tablePost VALUES('','" . $postObject->getTitlePost() . "','" . $postObject->getContentPost() . "')";
        $prep = $this->_db->prepare($sql);
        $prep->execute();
        return $this->_db->lastInsertId();
    }

    public function findAllPosts() {
        $sql = "SELECT * FROM $this->_tablePost ORDER BY title_post";
        $prep = $this->_db->prepare($sql);
        $prep->execute();
        while ($res = $prep->fetch(PDO::FETCH_ASSOC)) {
            $resArray[] = $res;
        }
        return $resArray;
        $prep->closeCursor();
    }

    public function removePost($id_post) {
        $sql = "DELETE FROM post WHERE id_post=$id_post LIMIT 1";
        $prep = $this->_db->prepare($sql);
        $prep->execute();
    }

    public function countTable($param) {
        $req = $this->_db->query($param);
        $resultat = $req->fetch();
        $req->closeCursor();
        $nblignes = $resultat[0];
        return $nblignes;
    }

}

?>
