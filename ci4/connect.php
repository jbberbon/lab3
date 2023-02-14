<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');

if (!empty($name)) {
    if (!empty($email)) {
        if (!empty($message)) {
            $host = "localhost";
            $db_username = "webprogmi211";
            $db_password = "webprogmi211";
            $db_name = "webprogmi211";

            // Check connection
            $conn = new mysqli($host, $db_username, $db_password, $db_name);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                $sql = "INSERT INTO jbberbon_MyGuests (name, email, message) values('$name', '$email', '$message')";
                if ($conn->query($sql)) {
                    echo "New Record Inserted Successfully";

                    $sql = "SELECT id, name, email, message FROM jbberbon_MyGuests";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<br> id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["email"] . " " . $row["message"] . "<br>";
                        }
                    } else {
                        echo "0 results";
                    }

                } else {
                    echo "Error : " . $sql . "" . $conn->error;
                }
            }
            $conn->close();
        } else {
            echo "Message should not be empty";
            die();
        }
    } else {
        echo "Email should not be empty";
        die();
    }
} else {
    echo "Name should not be empty";
    die();
}
?>