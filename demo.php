<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>test php</h1>
    <?php  
        // echo "hello word";

        // $nom = "<br><strong> peniel </strong>";

        // $age =  10;

        // echo $nom . " a :" . $age ;

        // // conditions if

        // if ($age < 18) {
        //     echo $nom . " est mineur";
        // } 
        // else {
        //     echo $nom . " est majeur";
        // }

        // // conditions switch

        // switch ($age) {
        //     case 18:
        //         echo $nom . " est majeur";
        //         break;
            
        //     default:
        //     echo $nom . " est mineur";
        //         break;
        // }

        // // boocles for

        // for($i = 0; $i < 10; $i++)
        // {
        //     echo $i ."<br>";
        // }

        // // boovles foreach

        // $students = ["peniel","zool","achile"];

        // foreach ($students as $student) {
        //     echo $student." ";
        // }
        // // fonction

        // $globe = 1;

        // function test()
        // {
        //     static $a = 10;
        //     echo $a;
        //     $a + 1;
        // }
        // echo test();

        $exist = "";

        if (isset($exist)) {
            echo "ça exited";
        }

        if (empty($exist)) {
            echo " c'est pas vide";
        }
        ?>
</body>
</html>