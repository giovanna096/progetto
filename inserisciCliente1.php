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
			<a href="home.html" TITLE="home"><img style="border: 0px solid ; width: 709px; height: 86px;" class="classname" src="images/logo.png" ALT="logo"></a>
	    </div>
            
            <h2 style="text-align: center;"><br></h2>
	    
	    <h2 style="text-align: center;"><b>Inserimento dati cliente</b></h2>

            
	     <div style="text-align: center;">
		<form action="inserisciCliente.php" method="post">
	     <div style="text-align: center;">
	     </div>
		<table style="text-align: left; width: 100px; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
			<tbody><tr><td style="vertical-align: top; text-align: center; white-space: nowrap;">
			<dl>
			  <dt> Nome cliente: </dt>
			</dl>
			</td><td style="vertical-align: top;"><p><input name="nome" size="30" type="text"> </p>
			</td></tr><tr><td style="vertical-align: middle; white-space: nowrap;"> Partita IVA cliente:</td><td style="vertical-align: top; text-align: center;"><dl><dt><input name="partiva" size="30" type="text"></dt></dl></td></tr><tr><td style="vertical-align: top; white-space: nowrap;">
			<dl>
		          <dt> Domicilio azienda:</dt>
		        </dl>
			</td><td style="vertical-align: top;"><dl><dt><input name="domicilio" size="20" type="text" autocomplete="off"></dt></dl></td></tr><tr><td style="vertical-align: middle; text-align: center;"> Citta:</td><td style="vertical-align: top;"><input name="citta" size="20" type="text"></td></tr><tr><td style="vertical-align: middle; text-align: center;"> Email: </td><td style="vertical-align: top;"><p><input name="email" size="30" type="text"> </p></td></tr><tr><td style="vertical-align: middle; text-align: center;"> Telefono: </td><td style="vertical-align: top;"><p><input name="telefono" size="30" type="text"> </p></td></tr><tr><td style="vertical-align: middle; text-align: center;"> Username: </td><td style="vertical-align: top;"><p><input name="username" size="30" type="text"> </p></td></tr><tr><td style="vertical-align: middle; text-align: center;"> Password:</td><td style="vertical-align: top;">
		        <dl>
		          <dt><input name="password" size="30" type="text" autocomplete="off"></dt>
		        </dl>
			</td><br><br><br><br></tr></tbody>
		</table>
			<input value="invia" name="b1" type="submit">
	              <input value="annulla" name="b2" type="reset">
	        </form>
	     </div>

        </body>
</html>