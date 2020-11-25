<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "saherelsayed", "tuHuu4qu", "saherelsayed");
$rows = 0;
$user_arr = array();
$query = "SELECT user_id FROM Users";
if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) 
    {
    $rows++;
    array_push($user_arr,$row["user_id"]);
    }

    /* free result set */
    $result->free();
}

echo "<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, 
th 
{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: Gray;
}
</style>
";
  echo" <table> <tr> <th>User Names: </th> </tr>";
  for ($x = 0; $x < $rows; $x++)
  {
  echo"<tr><td>$user_arr[$x]</td></tr>";
  }
  echo" </table>";
?>
