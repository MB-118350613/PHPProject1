<?php
session_start();
$fullNameValue = "";
$totalValue2="";
/*
 * * create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
        $_SESSION['txtName'] =$fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2;
        
 ?>      
<!DOCTYPE html>
        <html>
            <HEAD>
                <TITLE>Personal Details</TITLE>
            </HEAD>
             <link rel="stylesheet" href="Ebusiness.css" type="text/css" />
             <style>
                  input{
  background-color: darkblue; 
  border:32px;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
  cursor: pointer;
}
input[type=text]{
                width: 60px;
                -webkit-transition: width .35s ease-in-out;
                transition: width .35s ease-in-out;
            }
            input[type=text]:focus{
                width: 250px;
            }
            
             </style>
            <body>
                <a href ="Ebusiness1.php" class="button">Back</a>
                <div class ="form">
                    
                    <form name =" Details" method="post" action="Ebusiness3.php">
                        <center>
                            <table cellspacing="10">
                                <tr>
                                    <td><b></b></td>
                                    <td><b>Please Enter your Details Below</b></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" id="txtName" name="txtName" value="" required=""/></td>  
                                </tr>
                                 <tr>
                                    <td>Phone Number</td>
                                    <td><input type="text" id="txtNum" name="txtNum"  value="" required=""/></td>  
                                </tr>
                                 <tr>
                                    <td>Password</td>
                                    <td><input type="password" id="txtPassword" name="txtPassword" value="" required=""/></td>  
                                </tr>
                                <tr>                               
                                    <td><input type="hidden" class='btnCalc' id="txtTotal" name="txtTotal" value="<?php echo $totalValue ;?>"/></td>  
                                </tr>
                            </table>
                        </center>
                        <center>
                            <input type="submit" name="btnContinue"  id="btnContinue" oneclick="" value="Continue"/>
                        </Center>
                    </form>
                </div>
            </body>
        
