<?php
   include( "menu.php" );
?>
<html>
    <body class="content1">
        <div align="center">
        <br><br><br>
        <?php

        $show_from = $_POST["showfrom"];
        $show_to = $_POST["showto"];

        $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net", "b494fa8588b593", "9868e4e7", "heroku_f3d0fe302c6dbfc");

        if(!$conn) {
            die('Problem about database connection');
        }

        if($show_from != "" && $show_to != "") {
            $sql = "select * from temperature where from_unit='".$show_from."' and to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" background="temperature_table.jpg" style="text-align: center; font-size: 25px; 
                   background-image: linear-gradient(#6ba15d,#6ba18d,#6ba1be); border-color: darkslateblue;">
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
            $sql = "select * from temperature where from_unit='".$show_from."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" background="temperature_table.jpg" style="text-align: center; font-size: 25px; 
                   background-image: linear-gradient(#6ba15d,#6ba18d,#6ba1be); border-color: darkslateblue;">
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
            $sql = "select * from temperature where to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" background="temperature_table.jpg" style="text-align: center; font-size: 25px; 
                   background-image: linear-gradient(#6ba15d,#6ba18d,#6ba1be); border-color: darkslateblue;">
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
            $sql = "select * from temperature order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>
            <table border="1" background="temperature_table.jpg" style="text-align: center; font-size: 25px; 
                   background-image: linear-gradient(#6ba15d,#6ba18d,#6ba1be); border-color: darkslateblue;">
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