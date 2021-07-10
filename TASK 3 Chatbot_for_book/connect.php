<?php


//connection
$conn = mysqli_connect('localhost', 'root', '', 'control');

//check the connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}


if (isset($_POST['forward'])) {
    echo "<p align=center>forward</p> ";
    mysqli_query($conn, "INSERT `control panel` SET `Forward` = 'f'");
}
if (isset($_POST['left'])) {
    echo "<p align=center>left</p> ";
    mysqli_query($conn, "INSERT `control panel` SET `Left` = 'l'");
}
if (isset($_POST['stop'])) {
    echo "<p align=center>stop</p> ";
    mysqli_query($conn, "INSERT `control panel` SET `Stop` = 's'");
}
if (isset($_POST['right'])) {
    echo "<p align=center>right</p> ";
    mysqli_query($conn, "INSERT `control panel` SET `Right` = 'r'");
}
if (isset($_POST['backward'])) {
    echo "<p align=center>backward</p> ";
    mysqli_query($conn, "INSERT INTO`control panel` SET `Backward` = 'b'");
}


?>

<html>

<body style="background-color:#464345" ;>
    <center>
        <form>
            <input type="button" value="Go back!" onclick="history.back()">
        </form>
    </center>
</body>

</html>