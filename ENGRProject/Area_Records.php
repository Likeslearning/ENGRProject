<?php
   include( "menu.php" );
?>
<html>
    <body class="content3">
        <div align="center">
        <br><br><br>
        <?php
        include("DB.php");

        $show_from = $_POST["showfrom3"];
        $show_to = $_POST["showto3"];

        $conn = mysqli_connect($host, $username, $password, $db_name);

        if(!$conn) {
            die('Problem about database connection');
        }

        if($show_from != "" && $show_to != "") {
            $sql = "select * from area where from_unit='".$show_from."' and to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; background-image: linear-gradient(#ff6d69,#ff6dd4);">
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
            
        else if($show_from != "" && $show_to == "") {
            $sql = "select * from area where from_unit='".$show_from."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; background-image: linear-gradient(#ff6d69,#ff6dd4);">
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
            
        else if($show_from == "" && $show_to != "") {
            $sql = "select * from area where to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; background-image: linear-gradient(#ff6d69,#ff6dd4);">
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
            $sql = "select * from area order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; background-image: linear-gradient(#ff6d69,#ff6dd4);">
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

        mysqli_close($conn);
        ?>
            </table>
        </div>
    </body>
</html>

