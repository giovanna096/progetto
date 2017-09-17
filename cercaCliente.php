<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
		  <meta http-equiv="content-type" content="text/html; charset=utf-8">
		  <title>SENSOR MANAGEMENT SYSTEM</title>
	  	  <link rel="stylesheet" type="text/css" href="css/stile.css" media="screen">
	</head>

        <body>

            <div style="margin-top: 28px; height: 105px; text-align: left; margin-left: 319px; width: 725px;">
			<a href="opzioniazienda.php"><img style="border: 0px solid ; width: 709px; height: 86px;" class="classname" alt="" src="images/logo.png"></a>
	    </div>
        </body>
</html>
        
<?php
    
    session_start();
      if(isset($_SESSION['username']) && isset($_SESSION['password'])){
	    
      } else{
	    header('Location:Login.html');
      }
    
    //dati del form
    $partiva=$_POST['partitaiva'];
    
    //database
    define('DB_HOST', '127.0.0.1');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'progetto');
    
    //get connection
    $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($mysqli->connect_errno){
    	trigger_error('Connection failed: ' . $mysqli->connect_error, E_USER_NOTICE);
    }
    
    //comando SQL
    $sql = sprintf("SELECT partitaiva, nomeazienda, domicilio, citta, telefono, email, username, password FROM cliente WHERE PartitaIva='%s'", mysqli_real_escape_string($mysqli, $partiva));
    $result = $mysqli->query($sql);
    $conta= mysqli_num_rows($result);
    
    $row = mysqli_fetch_array($result, MYSQLI_NUM);   
    
    if($conta===1){
    
        $str = 'I dati del cliente cercato sono i seguenti: <br><br>';
       // echo $str;
        echo $dati = htmlspecialchars( mysql_result($str, 0, 'str') );
        $partitaiva = $row[0];
        $dati = '<b>Partita Iva:  </b>' . $partitaiva . ' </br>';
        echo $dati;
        $nome = $row[1];
        $dati = '<b>Nome: </b> ' . $nome . ' </br>';
        echo $dati;
        $domicilio = $row[2];
        $dati = '<b>Domicilio:  </b>' . $domicilio . ' </br>';
        echo $str;
        $citta = $row[3];
        $dati = '<b>Citta: </b>' . $citta . ' </br>';
        echo $dati;
        $tel = $row[4];
        $dati = '<b>Telefono: </b>' . $tel . ' </br>';
        echo $str;
        $email = $row[5];
        $dati = '<b>Email: </b>' . $email . ' </br>';
        echo $dati;
        $username = $row[6];
        $dati =  '<b>Username: </b>' . $username . ' </br>';
        echo $dati;
        $password = $row[7];
        $dati = '<b>Password: </b>' . $password . ' </br>';
        echo $dati;
    
    } else {
        $dati = 'l cliente non e\' stato trovato. <br> Torna alle <a href=\"opzioniazienda.php\">opzioni di selezione</a>';
        echo $dati;
    }

?>

</body>
</html>