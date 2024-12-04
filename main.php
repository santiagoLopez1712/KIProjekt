<h2>Hier kommt der Content</h2>
<?php
//Variable aufbauen
$title = '<h1 style="color: white;">Das ist ein Teil der Content</h1>';
//Auf den Bildschirm anzeigen
echo $title;
?>

<section class="form-container">
    <h1></h1>
    <form action="" method="get">
        <label for="erste zahl">Erste Zahl:</label>
        <input type="number" id="zahl1" name="zahl1" required>
                 
        <label for="zweite zahl">zweite zahl:</label>
        <input type="number" id="zahl2" name="zahl2" required>

        <label for="dritte zahl">dritte zahl:</label>
        <input type="number" id="zahl3" name="zahl3" required>
                 
        <button type="submit" value="addieren">Addieren</button>
    </form>
</section>
<?php
if(isset($_GET['zahl1'])&& isset($_GET['zahl2']) && isset($_GET['zahl3'])){
$zahl1 = $_GET['zahl1'];
$zahl2 = $_GET['zahl2'];
$zahl3 = $_GET['zahl3'];

$ergebnis = $zahl1 + $zahl2 + $zahl3;
var_dump($ergebnis);

echo 'Das Ergebnis der Addition von '. $zahl1 . ' und ' . $zahl2 . ' und ' .  $zahl3 .' ist: ' . $ergebnis; 
}
?>
<section class="form-container">
    <h1></h1>
    <form action="" method="post">       
        <input type="number" id="zahl1" name="zahl1" required><br><br>
        <input type="number" id="zahl2" name="zahl2" required><br><br>      
        <button type="submit" value="addieren">Addieren</button>
    </form>
</section>
<?php
if(isset($_GET['zahl1'])&& isset($_GET['zahl2']) && isset($_GET['zahl3'])){
    $zahl1 = $_GET['zahl1'];
    $zahl2 = $_GET['zahl2'];
    
}
?>  
