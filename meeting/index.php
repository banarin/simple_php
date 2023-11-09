<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>first php</title>
</head>
<body>

   <form method="POST" action="../meeting/index.php">
   <div class="container">
        <input type="number" class="form-control mt-5" name="nbr" placeholder="Enter un nombre">
        <button class="btn btn-warning mt-3 text-light">Jouer</button>
        <!--  -->
    </div>
   </form>
    <?php 
        $solution = rand(1,10);

        $recup = $_POST['nbr'];
        if ($recup == $solution) {
            echo "<div class='alert alert-success mt-3'>Vous avez gagner </div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Vous avez perdu </div>";

        }

        // echo "hello worrd";

        //les variables
        // $nom = "l2b";
        // $age = 20;
        // les constantes
        // define("constant", "je suis etudiant");
        // echo constant; 
        // $student = array("bernice", "irin", "zoul");
        // $table = [""]
            
        // echo $student;
        // les conditions
        
        // if ($age < 18) {
        //     echo "<br> je suis mineur";
        // } else {
        //     echo "<br> je suis majeur";
        // }
        
        // les conditions switch
    // $choix = 5;

    // switch ($choix) {
    //     case 0:
    //         echo "<br>le choix est ".$choix;
    //         break;
    //     case 1:
    //         echo "<br>le choix est ".$choix;
    //         break;
    //     default:
    //         echo "<br>ce qui est sur ce n'est 0 ou 1";
    //         break;
    // }

    // boucles for

    // for ($i=0; $i < 20; $i++) { 
    //    echo "<br> je compte à ".$i;
    // }

    // boucles foreach
    // $students = ["Bernice", 2,"zoul"];
    // foreach($students as $student)
    // {
    //     echo "<br> je m'appel ".$student;
    // }

    // les variables globale

    // function exemple()
    // {
    //     global $choix;
    //    return $choix;
    // }
    //  echo exemple();

    ?>
</body>
</html>