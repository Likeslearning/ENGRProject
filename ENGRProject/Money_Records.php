<?php
   include("menu.php");
?>
<html>
    <body class="content8">
        <div align="center">
        <br><br><br>
        <?php
        include("DB.php");

        $show_from = $_POST["showfrom8"];
        $show_to = $_POST["showto8"];

        $conn = mysqli_connect($host, $username, $password, $db_name);

        if(!$conn) {
            die('Problem about database connection');
        }

        if($show_from != "" && $show_to != "") {
            $sql = "select * from money where from_unit='".$show_from."' and to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: white; background-image: linear-gradient(#00a1e9, #002ce9);">
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
            
        else if($show_from != "" && $show_to == "") {
            $sql = "select * from money where from_unit='".$show_from."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: white; background-image: linear-gradient(#00a1e9, #002ce9);">
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
            
        else if($show_from == "" && $show_to != "") {
            $sql = "select * from money where to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: white; background-image: linear-gradient(#00a1e9, #002ce9);">
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
            $sql = "select * from money order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: white; background-image: linear-gradient(#00a1e9, #002ce9);">
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

        mysqli_close($conn);
        ?>
            </table>
        </div>
    </body>
</html>