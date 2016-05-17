<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>Challenge 8</title>
        <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
        <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>

        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        // Afficher les erreurs à l'écran
        ini_set('display_errors', 1);
        // Enregistrer les erreurs dans un fichier de log
        ini_set('log_errors', 1);
        // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
        ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

        echo '--- Challenge 8 --- ';

        include('class/Connexion.class.php');
        include('class/Post.class.php');

        //$newPost = new Post('Post3', 'qsdfgh');
        $db = new Connexion();

        echo 'Connect BDD OK ; ';

        $param = 'SELECT COUNT(id_post) FROM post';

        /* $nblignes = $db->countTable($param);
          echo 'Le nombre de lignes est : ' . $nblignes; */

        //echo 'Le nombre de lignes est : ' . $db->addPost($newPost);
        ?>
        <section class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tinfo">
                            <thead>
                                <tr>
                                    <th>Titre du Post</th>
                                    <th>Post</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                    <div>
                        <div class="glyphicon glyphicon-trash" id="trashCan">Delete</div>
                        <br>
                        <a href="php/ajouter.php">
                            <span class="glyphicon glyphicon-plus-sign" id="plussign">Ajouter un Post</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
