<!DOCTYPE HTML>
<html>

<head>
    <title> Control </title>

    <style>
        #h1 {
            text-align: center;
            text-shadow: 2px 2px #1b1b1b;
            color: rgb(8, 8, 8);
            text-transform: capitalize;
        }

        body {
            background-color: #464345;
        }
    </style>


</head>


<body>
    <form action="connect.php" method="post">
        <h1 id="h1">control robot movment</h><br><br><br><br>



            <p style="text-align:center;">
                <button type="submit" name="forward">Forward</button>
            </p>


            <p style="text-align:center;">
                <button type="submit" name="left">Left</button>
                <button type="submit" name="stop">STOP</button>
                <button type="submit" name="right">Right</button>
            </p>

            <p style="text-align:center;">
                <button type="submit" name="backward">Backward</button>
            </p>

    </form>

</body>

</html>