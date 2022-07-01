<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>console</title>
</head>
<body>


    
        <div class="form-floating border border-danger w-50 m-3 p-2">
            
            Query: <br>
            Database:
            <?php
                require_once "connexion.php";
            



                // class Display{
                    
                //     protected string $req;
                //     protected string $bdd;
                //     // public function __construct(string $_POST['requete'], string $dbname)
                //     // {
                //     //     $this->req = $_POST['requete'];
                //     //     $this->req = $dbname;
                //     // }

                //     public function show(){
                //         echo "requete: ".$this->req. "<br>Bdd: ".$this->dbname;
                //     }
                // }
                // $display = new Display();
               


                // execution de la requete
                $req = "SELECT * FROM employes";
                $exec = $obj_pdo->query($req);
                 
                // notification
                if($exec) {
                    echo '<div class="alert alert-success mt-2" role="alert">
                    <strong>result of the request!</strong>
                    </div>';
                    ?>
                        Affected line:
                        <table class="table table-bordered border-primary w-50 m-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PRENOMS</th>
                                    <th>NOMS</th>
                                    <th>SEXE</th>
                                    <th>SERVICE</th>
                                    <th>DATE_EMBAUCHE</th>
                                    <th>SALAIRE</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php while ($result = $exec->fetch()):?>
                                    <tr>
                                        <th><?= $result['id_employes']?></th>
                                        <th><?= $result['prenom']?></th>
                                        <th><?= $result['nom']?></th>
                                        <th><?= $result['sexe']?></th>
                                        <th><?= $result['service']?></th>
                                        <th><?= $result['date_embauche']?></th>
                                        <th><?= $result['salaire']?></th>
                                    </tr>

                                <?php endwhile ?>
                            </tbody>
                        </table>
                    <?php
                }
                

            ?>

         

        </div>
    




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>


