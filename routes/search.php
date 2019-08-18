
<?php
include "../config.php";
if (isset($_POST['search'])) {
   $input = $_POST['search'];
   $Query = "SELECT * FROM players WHERE Name LIKE '%$input%' OR Ligue LIKE '%$input%' OR Age LIKE '%$input%' OR Team LIKE '%$input%' OR Value LIKE '%$input%' OR Position LIKE '%$input%' OR Agents LIKE '%$input%' OR Height LIKE '%$input%'";
   $ExecQuery = MySQLi_query($con, $Query);
   echo "<ul>";
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
    <div class="player">
        <div class="player__row">
            <li><?php echo '<span class="res_label">Ligue:</span> '. $Result['Ligue']; ?></li>
            <li><?php echo '<span class="res_label">Name:</span> '. $Result['Name']; ?></li>
            <li><?php echo '<span class="res_label">Team:</span> '. $Result['Team']; ?></li>
            <li><?php echo '<span class="res_label">Age:</span> '. $Result['Age']; ?></li>
        </div>
        <div class="player__row">    
            <li><?php echo '<span class="res_label">Height:</span> '. $Result['Height'] . 'm'; ?></li>
            <li><?php echo '<span class="res_label">Position:</span> '. $Result['Position']; ?></li>
            <li><?php echo '<span class="res_label">Value:</span> '. $Result['Value']; ?></li>
            <li><?php echo '<span class="res_label">Agent:</span> '. $Result['Agents']; ?></li>
        </div>
        <div class="player__row player__img">
            <img src="<?php echo $Result['ImgLink']; ?>" alt="<?php echo $Result['Name'] . "Profil Bild" ?>">
        </div>
    </div>
   <?php
}}
?>
</ul>