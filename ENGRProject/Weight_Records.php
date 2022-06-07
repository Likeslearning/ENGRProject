<?php
   include( "menu.php" );
?>
<html>
    <body class="content6">
        <div align="center">
        <br><br><br>
        <?php

        $show_from = $_POST["showfrom6"];
        $show_to = $_POST["showto6"];

        $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net", "b494fa8588b593", "9868e4e7", "heroku_f3d0fe302c6dbfc");

        if(!$conn) {
            die('Problem about database connection');
        }

        if($show_from != "" && $show_to != "") {
            $sql = "select * from weight where from_unit='".$show_from."' and to_unit='".$show_to."' limit 10";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="3" style="text-align: center; font-size: 25px; color: white;">
                <tr>
                    <th style="color: black;">USER INPUT</th>
                    <th style="color: black;">FROM UNIT</th>
                    <th style="color: black;">TO UNIT</th>
                    <th style="color: black;">CONVERTED VALUE</th>
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