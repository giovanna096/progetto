<?php
      session_start();
      if(isset($_SESSION['username']) && isset($_SESSION['password'])){
	    
      } else{
	    header('Location:Login.html');
      }
?>
<html>
    <head>
		<meta http-equiv="content-type" content="text/html"; charset=utf-8">
		<title>SENSOR MANAGEMENT SYSTEM</title>
		<link rel="stylesheet" type="text/css" href="css/stile.css" media="screen">
	</head>
        
        <body>
            
            <div style="margin-top: 28px; height: 105px; text-align: left; margin-left: 359px; width: 725px;">
			<a href="opzioniazienda.html" TITLE="opzioniazienda"><img style="border: 0px solid ; width: 709px; height: 86px;" class="classname" src="images/logo.png" ALT="logo"></a>
	    </div>
            
            <h2 style="text-align: center;"><b>Modifica dati sensore</b></h2>
            <p style="text-align: center;">Per modificare i dati del sensore, inserire l'identificatore del sensore e dell'impianto in cui si trova.
            </p>
	    
	    <div style="text-align: center;">
	    <form action="modificaSensore.php" method="post">
                <p>  Identificatore sensore: <input name="identificatore" size="30" type="text"> </p>
                <p> Identificatore impianto: <input name="idimpianto" size="30" type="text"></p> 
                <p><input value="invia" name="b1" type="submit">
                <input value="annulla" name="b2" type="reset"></p>
            </form>
	    </div>
            
        </body>
</html>