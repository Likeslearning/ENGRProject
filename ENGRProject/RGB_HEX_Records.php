<?php
   include( "menu.php" );
?>
<html>
    <body class="maincontent">
        <div align="center">
        <br><br><br>
        <?php

        $show_from = $_POST["showfrom9"];
        $show_to = $_POST["showto9"];

        $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net", "b494fa8588b593", "9868e4e7", "heroku_f3d0fe302c6dbfc");

        if(!$conn) {
            die('Problem about database connection');
        }

        if($show_from != "" && $show_to != "") {
            $sql = "select * from color where from_unit='".$show_from."' and to_unit='".$show_to."' limit 10";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="3" style="text-align: center; font-size: 25px; color: black;">
                <tr>
                    <th style="color: brown;">USER INPUT</th>
                    <th style="color: brown;">FROM UNIT</th>
                    <th style="color: brown;">TO UNIT</th>
                    <th style="color: brown;">CONVERTED VALUE</th>
                </tr>

            <?php
                while($row=mysqli_fetch_assoc($result)) {
                    echo "<tr><td>".$row['user_value']."</td><td>".$row['from_unit']."</td><td>"
                            .$row['to_unit']."</td><td>".$row['converted_value']."</td></tr>";
                }
            }
            
        else {
            echo '<h1 align="center">Check your inputs before clicking the button for previous records!</h1>';
        }

        mysqli_close($conn);
        ?>
            </table>
        </div>
    </body>
</html>