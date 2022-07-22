<?php
require_once 'include/db.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #4284f5;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th {
            background-color: #4284f5;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>AGE</th>
    </tr>
<?php

$sql = "SELECT id, name, age FROM users";
$result = $mysql->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
            . $row["age"]. "</td></tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$mysql->close();
?>
</table>
</body>
</html>
