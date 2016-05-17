<?php

Header('Content-type:application/json');
include('class/Connexion.class.php');

//Instanciation de la classe bdd et appel de la méthode contenant la requete bdd en json
$db = new Bdd();

$json = $db->findAllPosts();

$outp = array('data' => array());

$i = 0;
foreach ($json as $value) {
    $i++;
    $item = array($value['title_post'], $value['content_post']);
    $outp['data'][] = $item;
}

$outp['recordsTotal'] = $i;
$outp['recordsFiltered'] = $i;
echo json_encode($outp);
