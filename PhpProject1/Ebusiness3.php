<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel="stylesheet" type="text/css" href="Ebusiness2.css" />
        <style>
            
        </style>
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
        $Email = $_POST['txtEmail'];
        $Pin=$_POST['txtPassword'];
                echo "<br></br>";
                echo " User Name:".$fullNameValue.".";
                echo "<br></br>";
                echo " The payment needed is $ " .$totalValue2.".";
                echo "<br></br>";
                echo " Email is " .$Email.".";
                echo "<br></br>";
                echo "Pin is ".$Pin.".";
        ?>
        </center>
        </table>
    </body>
</html>



