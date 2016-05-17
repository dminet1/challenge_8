<?php

class Post {

    private $_id_post, $_title_post, $_content_post;

    public function __construct($title_post = '', $content_post = '') {
        $this->_title_post = $title_post;
        $this->_content_post = $content_post;
    }

    public function getIdPost() {
        return $this->_id_post;
    }

    public function getTitlePost() {
        return $this->_title_post;
    }

    public function setTitlePost($title_post) {
        $this->_title_post = $title_post;
    }

    public function getContentPost() {
        return $this->_content_post;
    }

    public function setContentPost($content_post) {
        $this->_content_post = $content_post;
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
