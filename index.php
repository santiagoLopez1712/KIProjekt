<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/style_header.css">
    <link rel="stylesheet" href="estilos/styles.css">
    <title>TEST-PHP</title>
</head>
<body>
    
<?php
$backgroundColor = 'black';

if (isset($_GET['changebackgroundcolor'])) {
    $backgroundColor = 'rose';
    $changebackgroundcolor= "white";
}
?>   
<a style="color:black; margin:2px; padding:2px; width: 300px " href="changebackgroudcolor">Cambia el fondo de pantalla</a>

<?php
//Datos de acceso a la base de datos
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'test';


//Create conexión 
$conn = new mysqli($host, $username, $password, $database);


//Check connection
if ($conn->connect_error) {
    die('Verbindung fehlgeschlagen: ' . $conn->connect_error);
}
else{
    echo "Verbindung erfolgreich";
    echo "<br><br>";
}
?>

<table>
    <tr>
        <th style="font-weight: 500;">Vorname</th>
        <th style="font-weight: 500;">Nachname</th>
        <th style="font-weight: 500;">Alter</th>
        <th style="font-weight: 500;">Position</th>
        <th style="font-weight: 500;">Activr</th>
        <th style="font-weight: 500;">Role_id</th>
    </tr>
    <br>

<?php
//Anfrage

$query = 'SELECT * FROM user_repository';

$result = $conn->query($query);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        //Datos en tabla de html
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['FORENAME'] . "</td>";
        echo "<td>" . $row['SURNAME'] . "</td>";
        echo "<td>" . $row['AGE'] . "</td>";
        echo "<td>" . $row['POSITION'] . "</td>";
        echo "<td>" . $row['ACTIVE'] . "</td>";
        echo "<td>" . $row['ROLE_ID'] . "</td>";
        echo "</tr>";       
     

        //Solo los datos en Lista
        echo "id: " . $row['ID'];
        echo "<br>";
        echo "Vorname : ". $row['FORENAME'];
        echo "<br>";
        echo "Nachname: " . $row['SURNAME'];
        echo "<br>";
        echo "Alter: " . $row['AGE'];
        echo "<br>";
        echo "Position: " . $row['POSITION'];
        echo "<br>";
        echo "Active: " . $row['ACTIVE'];
        echo "<br>";
        echo "Role_id: " . $row['ROLE_ID'];
        echo "<br> <br>";
    }

}
//Insert into (Ingreso de nuevos datos por parte del cliente)   
?>
<br><br><br><br><br>
</table>
<form action="" method="post">
    <input type="text " name="FORENAME" id="" placeholder="Vorname">
    <input type="text " name="SURNAME" id="" placeholder="Nachname">
    <input type="number " name="AGE" id="" placeholder="Alter">
    <input type="text " name="POSITION" id="" placeholder="Position">
    <input type="number " name="ACTIVE" id="" placeholder="Active">
    <input type="number" name="ROLE_ID" id="" placeholder="Role_id">
    <button type="submit">Neue Mitarbeiter anlegen</button>
</form>

<?php



$FORENAME = $_POST['FORENAME'];
$SURNAME = $_POST['SURNAME'];
$AGE = $_POST['AGE'];
$POSITION = $_POST['POSITION'];
$ACTIVE = $_POST['ACTIVE'];
$ROLE_ID = $_POST['ROLE_ID'];

$insertQuery = 'INSERT INTO user_repository(FORENAME, SURNAME, AGE, POSITION, ACTIVE, ROLE_ID)
                VALUES('.$FORENAME.' , '.$SURNAME.' , '.$AGE.' , '.$POSITION.' , '.$ACTIVE.' , '.$ROLE_ID.')';

if ($conn ->query($insertQuery)===true) {
    echo '<h4>Mitarbeiter ,'.$FORENAME.' '.$SURNAME.'" Erfolgreich angelegt</h4>';

}else {
    echo 'Error: ' . $insertQuery . '<br>' . $conn->error;
}

?>

</body>
</html>

<?php
//Datos de acceso
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'kunden_repository';

//Crear conexión 
$conn = new mysqli($host, $username, $password, $database);

//Comprobar conexión 
if ($conn -> connect_error) {
    die('Die Verbindung ist fehlgeschlagen' . $conn -> connect_error);
}
else {
    echo 'Erfolgreiche Verbindung';
    echo '<br><br>';
}




?>