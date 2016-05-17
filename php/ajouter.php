<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>Ajouter un Post</title>
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
        <section class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                    <div>
                        <h1>Ajout d'un Post</h1>
                        <a href="index.php">
                            <span class="glyphicon glyphicon-plus-sign" id="quitter">Quitter</span>
                        </a>
                    </div>
                    <form role="form" action="" method="post" id="form">
                        <div class="form-group">
                            <label for="titre">Titre du Post</label><br>
                            <input type="text" id="titre">
                        </div>
                        <div class="form-group">
                            <label for="info">Post</label><br>
                            <textarea rows="5" id="info"></textarea>
                        </div>
                        <button type="button" class="btn btn-default" id="formbtn" >Ajouter</button>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
