
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
        <link rel="stylesheet" href="">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../assets/styles/styles.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="wrapper_add">
            <?php 

            include "../config.php";


            
            

            
            
            
            $username_input = $_POST["login_name"];
            $password_input = $_POST["login_password"];

            $LoginQuery = "SELECT * FROM fyp_login WHERE username='$username_input' AND password='$password_input' ";
             
            if ($LoginQuery){
                echo $LoginQuery;
                ?>
                <h2><a href="/FyP/addPlayer.html">Add more</a></h2>
                <div class="addNew"><a href="http://localhost/FyP/">Back to Search</a></div>
                <div class="addNew"><a href="http://localhost/FyP/edit.html">Edit Player</a></div>
                    <h1>Add new Player</h1>
                    <form action="./routes/add.php" method="POST" id="addNewPlayers">
                        <li>
                            <label for="addLigue">League: </label>
                            <select name="addLigue" id="addLigue">
                                <option value="Bundesliga">Bundesliga</option>
                                <option value="Premier League">Premier League</option>
                                <option value="La Liga">La Liga</option>
                                <option value="Serie A">Serie A</option>
                                <option value="Ligue A">Ligue A</option>
                            </select>
                        </li>
                        <li><label for="addName">Name: </label><input type="text" name="addName" id="addName"></li>
                        <li><label for="addTeam">Team: </label><input type="text" name="addTeam" id="addTeam"></li>
                        <li><label for="addAge">Age: </label><input type="text" name="addAge" id="addAge"></li>
                        <li><label for="addHeight">Height: </label><input type="text" name="addHeight" id="addHeight"></li>
                        <li>
                            <label for="addPos">Position: </label>
                            <select name="addPos" id="addPos">
                                    <option value="TW">TW</option>
                                    <option value="IV">IV</option>
                                    <option value="RV">RV</option>
                                    <option value="LV">LV</option>
                                    <option value="ZDM">ZDM</option>
                                    <option value="RM">RM</option>
                                    <option value="LM">LM</option>
                                    <option value="ZOM">ZOM</option>
                                    <option value="RF">RF</option>
                                    <option value="LF">LF</option>
                                    <option value="HS">HS</option>
                                    <option value="MS">MS</option>
                            </select>
                        </li>
                        <li><label for="addValue">Value: </label><input type="text" name="addValue" id="addValue"></li>
        
                        <li><label for="addAgent">Agent: </label><input type="text" name="addAgent" id="addAgent"></li>
                        <li><label for="addImg">Image URL: </label><input type="text" name="addImg" id="addImg"></li>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <?php
                

            } else {
                echo "No Permission for you, Sir!";
            }
            ?>
        </div>
            
        <script src="" async defer></script>
    </body>
</html>