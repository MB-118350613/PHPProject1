<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel="stylesheet" type="text/css" href="Ebusiness2.css" />
    </head>
    <body>
        <a href ="Ebusiness2.php" class="button">Back</a>
        <table>
    <center>
        <img src='BusinessLogo.jpg' width='400' height='400'>
        <?php

        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue =$_POST['txtName'];
        $PhoneNumber = $_POST['txtNum'];
                echo "<br></br>";
                echo " User Name:".$fullNameValue.".";
                echo "<br></br>";
                echo " The payment needed is $ " .$totalValue2.".";
                echo "<br></br>";
                echo " Phone number is " .$PhoneNumber.".";
        ?>
        </center>
        </table>
    </body>
</html>



