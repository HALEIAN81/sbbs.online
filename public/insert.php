<!DOCTYPE html>
<html>
<head>
    <title>User Premium Domains and Apps Entry Page</title>
    <link rel="stylesheet" type="text/css" href="css/delta.css">
<body>
    <center>
        <?php

        error_reporting(E_ALL); ini_set('display_errors', 1);

        $conn = mysqli_connect("localhost", "root", "", "g2dmain");

        if($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $domain_name = $_REQUEST['domain_name'];
        $price = $_REQUEST['price'];
        $type = $_REQUEST['type'];

        $sql = "INSERT INTO add_domains VALUES ('$_POST[field1]', '$_POST[field2]', '$_POST[field3]', '$_POST[field4]', '$_POST[field5]')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

            echo n12br("\n$id\n $name\n "
            . "$domain_name\n $price\n $type");
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
