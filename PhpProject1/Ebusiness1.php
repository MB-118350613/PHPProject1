<?php
session_start();
$totalValue="";
$_SESSION('txtTotal') = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">

     <head>
         <meta charset="utf-8"/>
         <title>Ebusiness 1</title>
         <link rel="stylesheet" href="Ebusiness.css" type="text/css"
    </head>
     <body>
              <div class ="form">
                  <form name="intCalc" method="post" action="Ebusiness3.php">
                      <h1>Shop Calculator</h1>
                      <hr/>
                      <center>
                          <table cellspacing="10">
                              <tr>
                                  <td><b>Beverage</b></td>
                              </tr>
                              <tr>
                                  <td>CocaCola</td>
                                  <td> <input type="radio" id="CocaCola" name="RadGroup" value="1"/></td>
                              </tr>
                              <tr>
                                  <td>Sprite</td>
                                  <td> <input type="radio" id="Sprite" name="RadGroup" value="1"/></td>
                              </tr>
                              <tr>
                                  <td>Fanta</td>
                                  <td> <input type="radio" id="Fanta" name="RadGroup" value="1"/></td>
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
                                  <td>sub Total</td>
                                  <td><input type="text" id="txtSubTot" name="txtSub" readonly/></td>
                              </tr>
                               <tr>
                                  <td>Discount @30%</td>
                                  <td><input type="text" id="txtDisc" name="txtDisc" readonly/></td>
                               </tr>
                               <tr>
                                  <td>VAT @ 40%</td>
                                  <td><input type="text" id="txtVAT" name="txtVAT" readonly/></td>
                              </tr>
                               <tr>
                                  <td>Total</td>
                                  <td><input type="text" id="txtTotal" name="txtTotal" readonly/></td>
                              </tr>
                               
                          </table>
                      </center>
                      
                      <br/>
                      <center>
                          <input type="button" name="btnCalc" id="btnCalc" oneclick="calcSub()" value="Calculate"/>
                          <input type="button" name="btnClear" id="btnClear" oneclick="AmountClear()" value="Clear"/>
                          <input type="submit" name="btnProceed" id="btnCalc" oneclick="Proceed" value="Proceed"/>
                      </center>
                  </form>
              </div>
         
         <script language ="javascript" type="text/javascript">
                 <!--assigning values to the radio buttons-->
function calcSub() {
 //Enter in Prices Here
 var subAmount = parseFloat(document.getElementById('txtSubTot').value);
 var CocaCola = parseFloat(document.getElementById('CocaCola').value);
 var Sprite = parseFloat(document.getElementById('Sprite').value);
 var Fanta = parseFloat(document.getElementById('Fanta').value);
 
 <!-- This is the if statement for the radio buttons-->
 
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
      
     else if (document.getElementById('Sprite').checked) {
        document.intCalc.txtSubTot.value = Fanta;
        subAmount = Fanta;
        calculation(subAmount);
        }  
   }
   
   <!-- Function for calculatiing the values -->
 function calculation(parmSTotal){
     var subTotal = parseFloat(parmSTotal);
     var discCalc = parseFloat(subTotal * .30);
     var vatCalc = parseFloat(subTotal * .40);
     var total = parseFloat(subTotal - discCalc + vatCalc);
     
     
     document.intCalc.txtDisc.value= discCalc;
      document.intCalc.txtVAT.value= vatCalc;
       document.intCalc.txtTotal.value= total;
    }
    
function AmountClear(){
      document.getElementById("txtSubTot").value="";
       document.getElementById("txtDisc").value="";
        document.getElementById("txtVAT").value="";
         document.getElementById("txtTotal").value="";
         }    
    </script>
     </body>
</html>


	
