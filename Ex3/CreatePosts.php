<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "saherelsayed", "tuHuu4qu", "saherelsayed");
    if ($mysqli->connect_error)
    {
        printf("Connection failed %s\n", $mysqli->connect_error);
        exit();
    }
    $user = $_POST["user_id"];
    $post = $_POST["post"];
    if ($post == "")
    {
        echo "Empty but talented. So bad it was not published";
        exit();
    }
    $query = "SELECT user_id from Users";
    $result = $mysqli->query($query);
    $userFound = FALSE;
    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            if ($row["user_id"] == $user){
                $userFound = TRUE;
            }
        }
    }
    if (!$userFound)
    {
        echo " Not created because the USER ID provided was not created. Go back to Ex2 to create it first.";
        exit();
    }
    $query = "INSERT INTO Posts (content, author_id) VALUES ('" . $post . "', '" . $user .  "')";
    if ($result = $mysqli->query($query))
    {
        echo "Post created";
    }
    else
    {
        echo "An error happened.";
    }
$mysqli->close();
?>