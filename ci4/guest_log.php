<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 0.5px solid black;
        }
    </style>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "webprogmi211";
    $password = "webprogmi211";
    $dbname = "webprogmi211";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, name, email, message FROM jbberbon_MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>GUEST LOG</h1>";
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>

</body>

</html>