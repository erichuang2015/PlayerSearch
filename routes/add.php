<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../assets/styles/styles.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        

 
        <div class="wrapper_add">
        <h2><a href="/FyP/addPlayer.html">Add more</a></h2>
        
        <?php


            include "../config.php";

           

            $ligue = $_POST["addLigue"];
            $name = $_POST["addName"];
            $team = $_POST["addTeam"];
            $age = $_POST["addAge"];
            $height = $_POST["addHeight"];
            $position = $_POST["addPos"];
            $value = $_POST["addValue"];
            $agent = $_POST["addAgent"];
            echo $ligue;

            
            // Attempt insert query execution
            $addPlayers = "INSERT INTO players (Ligue, Name, Team, Age, Height, Position, Value, Agents) VALUES ('$ligue', '$name', '$team', '$age', '$height', '$position', '$value', '$agent')";

            if(mysqli_query($con, $addPlayers)){
                echo "Records added successfully.";
            } else{
                echo "ERROR: Could not able to execute $con. " . mysqli_error($addPlayers);
            }
            
            // Close connection
            ?>
        </div>
        <script src="" async defer></script>
    </body>
</html>