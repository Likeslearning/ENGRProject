<?php
   include( "menu.php" );
?>
<html>
    <body class="content7">
        <div align="center">
        <br><br><br>
        <?php

        $show_from = $_POST["showfrom7"];
        $show_to = $_POST["showto7"];

        $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net", "b494fa8588b593", "9868e4e7", "heroku_f3d0fe302c6dbfc");

        if(!$conn) {
            die('Problem about database connection');
        }

        if($show_from != "" && $show_to != "") {
            $sql = "select * from time where from_unit='".$show_from."' and to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#dcdc00,#ff7500);">
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
            
        else if($show_from != "" && $show_to == "") {
            $sql = "select * from time where from_unit='".$show_from."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#dcdc00,#ff7500);">
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
            
        else if($show_from == "" && $show_to != "") {
            $sql = "select * from time where to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#dcdc00,#ff7500);">
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
            $sql = "select * from time order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#dcdc00,#ff7500);">
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

        mysqli_close($conn);
        ?>
            </table>
        </div>
    </body>
</html>