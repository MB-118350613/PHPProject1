<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Ebusiness </title>
        <link rel="stylesheet" href="Ebusiness.css" type="text/css" />
        <style>
            input[type=text]{
                width: 60px;
                -webkit-transition: width .35s ease-in-out;
                transition: width .35s ease-in-out;
            }
            input[type=text]:focus{
                width: 250px;
            }
            
            
            input[type=button]{
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
          input[type=submit]{
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

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover  {
  background-color: #006600;
  color: black;
}

.btnClear {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.btnClear:hover{
    background-color: #006600;
  color: black;
}
.btnProcceed {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.btnProceed:hover{
    background-color: #006600;
  color: black;



</style>
       
    </head>
    <a href ="BusinessHomepage.html" class="button">Back</a>
        <body> 
        <div class="form">
            <form name="intCalc" method="post" action="Ebusiness2.php">
        <h1>Ebusiness</h1>   
        <hr/>
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b>Products</b></td>
                </tr>
                <tr>
                    <td>Blockchain @ 1000</td>
                    <td><input type="radio" id="CocaCola" name="rdoGroup" value="1000" required/></td>
                </tr>
                <tr>
                    <td>Immersive @2000</td>
                    <td><input type="radio" id="Sprite" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td>Robots @3000</td>
                    <td><input type="radio" id="Fanta" name="rdoGroup" value="3000" /></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>Discount @ 10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
       
        <br />
            <center>
            <input type="button" name="btnCalc" class='button1' id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
            <input type="button" name="btnClear" class='btnClear' id="btnClear" onclick="AmountClear()" value="Clear"/>
            <input type="submit" name="btnProceed" class='btnProceed' id="btnProceed" onclick="" value="Proceed"/>
        </center>
            </form>
        </div>
       
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var CocaCola = parseFloat(document.getElementById('CocaCola').value);
                    var Sprite = parseFloat(document.getElementById('Sprite').value);
                    var Fanta = parseFloat(document.getElementById('Fanta').value);
                   
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('CocaCola').checked) {
                        document.intCalc.txtSubTot.value = CocaCola;
                        subAmount = CocaCola;
                        calculation(subAmount);
                       
                    }
                   else if (document.getElementById('Sprite').checked) {
                        document.intCalc.txtSubTot.value = Sprite;
                        subAmount = Sprite;
                        calculation(subAmount);
                       
                    }
                    else if (document.getElementById('Fanta').checked) {
                        document.intCalc.txtSubTot.value = Fanta;
                        subAmount = Fanta;
                        calculation(subAmount);
                    }
                }
               
                //function for calculationg the values//
                function calculation(parmsTotal) {
                    var subTotal = parseFloat(parmsTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc= parseFloat(subTotal * .20);   
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                   
                    //Inserting thrm intp thr correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
               
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                   
            </script>
    </body>
    </html>