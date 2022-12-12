<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">

name:  <input name="name" type="text" />
<br>
Surname:<input name="surname" type="text" />
<br>
wiek <input name="age" type="int" />

<p><input name="Submit1" type="submit" value="submit" /></p>

</form>
</body>
</html>



<?php

$sql = "INSERT INTO users (name, surname, wiek,) VALUES ($name, $surname, $);
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. " ". $row["wiek"]. " lat". "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

    

?>