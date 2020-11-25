
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "saherelsayed", "tuHuu4qu", "saherelsayed");
    if ($mysqli->connect_error){
        printf("Connection failed %s\n", $mysqli->connect_error);
        exit();
    }
    $user = $_POST["user_id"];
    if ($user == ""){
        echo "is your name nothing?";
        exit();
    }
    $query = "INSERT INTO Users (user_id) VALUES ('" . $user .  "')";
    if ($result = $mysqli->query($query)){
        echo "created successfully";
    }
    else{
        echo "Not created " . $user . " is already in the database!";
    }
    $mysqli->close();
?>
