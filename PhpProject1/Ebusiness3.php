<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel="stylesheet" type="text/css" href="Ebusiness2.css" />
    </head>
    <body>
        <a href ="Ebusiness2.php">Back</a>
    <center>
        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue =$_POST['txtName'];
                echo "<br></br>";
                echo "<br></br>";
                echo " User Name:".$fullNameValue.".";
                echo "<br></br>";
                echo " The payment needed is  " .$totalValue2.".";
        ?>
        </center>    
    </body>
</html>



