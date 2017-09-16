<html>
    <head>
		  <meta http-equiv='content-type' content='text/html; charset=utf-8'>
		  <title>SENSOR MANAGEMENT SYSTEM</title>
	  	  <link rel='stylesheet' type='text/css' href="css/stile.css" media='screen'>
	</head>
        
        <body>
            
            <div style='margin-top: 28px; height: 105px; text-align: left; margin-left: 359px; width: 725px;'>
			<a href='opzionicliente.php'><img style='border: 0px solid ; width: 709px; height: 86px;' class='classname' alt='' src='images/logo.png'></a>
	    </div>
        </body>
</html>  


<?php

	//accesso al database
	$host='localhost';
	$username='root';
	$password='';
	$db_nome='progetto';
	
	$result = mysql_pconnect($host, $username, $password);
	if($result===false){
	    trigger_error('Impossibile connettersi al server: ' . mysql_error(), E_USER_NOTICE);
	}
    
	$result = mysql_select_db($db_nome);
	if($result===false){
	    trigger_error('Accesso al database non riuscito: ' . mysql_error(), E_USER_NOTICE);
	}
	
	//acquisizione dati dal form HTML
	$codice = $_POST['codice'];
	$modinvio = $_POST['modinvio'];
	$tipo = $_POST['tipo'];
	$tempo = $_POST['tempo'];
	$info = $_POST['info'];
	$partitaiva = $_POST['partiva'];
	
	$idimpianto = $_POST['idimpianto'];
	$idsensore = $_POST['idsensore'];
	
	//inserimento dei dati nel database
	$insert = "INSERT INTO sistemaautorizzato (codice, modinvio, tipo, tempo, info, id_cliente) VALUES ('$codice','$modinvio', '$tipo', '$tempo', '$info', '$partitaiva')";
	
	$result = mysql_query($insert); //esecuzione della query di inserimento
	
	if (!$result===false) {
		trigger_error("Errore nella query $insert: " . mysql_error(), E_USER_NOTICE);
	}

	
	// chiudo la connessione a MySQL
	mysql_close();

	echo 'Query eseguita correttamente';
	
	echo "<a href='trasferimento.php?cod='$codice''>";
	echo "<a href='trasferimento.php?idi='$idimpianto''>";
	echo "<a href='trasferimento.php?ids='$idsensore''>";  


	
?>