<?php
   include( "menu.php" );
?>
<html>
    <body class="content4">
        <div align="center">
        <br><br><br>
        <?php

        $show_from = $_POST["showfrom4"];
        $show_to = $_POST["showto4"];

        $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net", "b494fa8588b593", "9868e4e7", "heroku_f3d0fe302c6dbfc");

        if(!$conn) {
            die('Problem about database connection');
        }

        if($show_from != "" && $show_to != "") {
            $sql = "select * from volume where from_unit='".$show_from."' and to_unit='".$show_to."' limit 10";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="3" style="text-align: center; font-size: 25px; background-image: linear-gradient(#ff6d69,#ff6dd4);">
                <tr>
                    <th style="color: darkblue;">USER INPUT</th>
                    <th style="color: darkblue;">FROM UNIT</th>
                    <th style="color: darkblue;">TO UNIT</th>
                    <th style="color: darkblue;">CONVERTED VALUE</th>
                </tr>

            <?php
                while($row=mysqli_fetch_assoc($result)) {
                    echo "<tr><td>".$row['user_value']."</td><td>".$row['from_unit']."</td><td>"
                            .$row['to_unit']."</td><td>".$row['converted_value']."</td></tr>";
                }
            }
            
        else {
            echo '<h1 align="center" style="color: white;">Check your inputs before clicking the button for previous records!</h1>';
        }

        mysqli_close($conn);
        ?>
            </table>
        </div>
    </body>
</html>