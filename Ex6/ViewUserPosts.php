<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "saherelsayed", "tuHuu4qu", "saherelsayed");
    if ($mysqli->connect_error)
    {
        printf("Connection failed %s\n", $mysqli->connect_error);
        exit();
    }
    $user = $_POST["user_id"];
    echo $user . "'s Posts:<br>";
    $query = "SELECT content from Posts WHERE author_id='$user' ";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td style='border: 3px solid black'>" . $row["content"] . "</td>";
            echo "</tr>";
        }
    }
    $mysqli->close();
?>
