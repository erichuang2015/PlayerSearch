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
        <h2><a href="/FyP/addPlayer.html">Edit more</a></h2>
        <?php


            include "../config.php";

           
            $id = $_POST["ID"];
            $ligue = $_POST["editLigue"];
            $name = $_POST["editName"];
            $team = $_POST["editTeam"];
            $age = $_POST["editAge"];
            $height = $_POST["editHeight"];
            $position = $_POST["editPos"];
            $value = $_POST["editValue"];
            $agent = $_POST["editAgent"];
            
            // Attempt insert query execution
            $editPlayer = "UPDATE players SET Ligue='$ligue' AND Name='$name' AND Team='$team' AND Age='$age' AND Height='$height' AND Position='$position' AND Agent='$agent' WHERE id='$id'";

            if(mysqli_query($con, $editPlayer)){
                echo "Players edited successfully.";
            } else{
                echo "ERROR: Could not able to execute $con. " . mysqli_error($editPlayer);
            }
            
            // Close connection
            ?>
        </div>
        <script src="" async defer></script>
    </body>
</html>