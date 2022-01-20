<!DOCTYPE html>
<html>
<head>
    <title>User Premium Domains and Apps Entry Page</title>
    <link rel="stylesheet" type="text/css" href="css/delta.css">
<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "g2dmain");

        if($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $appdom_name = $_REQUEST['appdom-name'];
        $price = $_REQUEST['price'];

        $sql = "INSERT INTO add_domains VALUES ('$id', '$name', '$appdom_name', '$price')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

            echo n12br("\n$id\n $name\n "
            . "$appdom_name\n $price");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </center>

</body>
</head>
</html>
