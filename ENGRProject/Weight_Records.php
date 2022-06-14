<?php
   include( "menu.php" );
?>
<html>
    <body class="content6">
        <div align="center">
        <br><br><br>
        <?php
        include("DB.php");

        $show_from = $_POST["showfrom6"];
        $show_to = $_POST["showto6"];

        $conn = mysqli_connect($host, $username, $password, $db_name);

        if(!$conn) {
            die('Problem about database connection');
        }

        if($show_from != "" && $show_to != "") {
            $sql = "select * from weight where from_unit='".$show_from."' and to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#ace5a0,#a6fb7c);">
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
            $sql = "select * from weight where from_unit='".$show_from."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#ace5a0,#a6fb7c);">
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
            $sql = "select * from weight where to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#ace5a0,#a6fb7c);">
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
            $sql = "select * from weight order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#ace5a0,#a6fb7c);">
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