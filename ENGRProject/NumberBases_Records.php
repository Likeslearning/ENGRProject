<?php
   include("menu.php");
?>
<html>
    <body class="content5">
        <div align="center">
        <br><br><br>
        <?php
        include("DB.php");

        $show_from = $_POST["showfrom5"];
        $show_to = $_POST["showto5"];

        $conn = mysqli_connect($host, $username, $password, $db_name);

        if(!$conn) {
            die('Problem about database connection');
        }

        if($show_from != "" && $show_to != "") {
            $sql = "select * from number_bases where from_unit='".$show_from."' and to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#ffa535,#ffd935);">
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
            $sql = "select * from number_bases where from_unit='".$show_from."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#ffa535,#ffd935);">
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
            $sql = "select * from number_bases where to_unit='".$show_to."' order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#ffa535,#ffd935);">
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
            $sql = "select * from number_bases order by id desc limit 20";
            $result = mysqli_query($conn, $sql);
            ?>

            <table border="1" style="text-align: center; font-size: 25px; color: black; background-image: linear-gradient(#ffa535,#ffd935);">
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