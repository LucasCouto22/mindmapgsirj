<?php
class Authenticator {

public static $username = "miguel.ticom";
public static $password = "miguel19011962";
  
public static $username1 = "claudio.brito";
public static $password1 = "claudio01081983";

public static $username2 = "ronaldo.bezerra";
public static $password2 = "ronaldo03071969";
  
public static $username3 = "francisco.nascimento";
public static $password3 = "francisco02051965";  
  
public static $username4 = "simao.neto";
public static $password4 = "simao11061961";  

public static $username5 = "carlos.carneiro";
public static $password5 = "carlos08121976";  

public static $username6 = "rodrigo.lima";
public static $password6 = "rodrigo09021981";  

public static $username7 = "luciano.filho";
public static $password7 = "luciano06061965";  

public static $username8 = "wlademir.brazil";
public static $password8 = "wlademir15091961";  
            
public static $username9 = "sergio.pina";
public static $password9 = "sergio06081959";  
  
public static $username10 = "antonio.moriggi";
public static $password10 = "antonio06031974"; 
  
public static $username11 = "marcia.guimarães";
public static $password11 = "marcia02021963"; 
  
public static $username12 = "stella.noroes";
public static $password12 = "stella28031988"; 
  
public static $username13 = "debora.marques";
public static $password13 = "debora01031975";   
  
public static $username14 = "ana.saad";
public static $password14 = "ana14101996"; 
  
public static function check() {
  if (
   
    ($_SERVER['PHP_AUTH_USER'] == self::$username && $_SERVER['PHP_AUTH_PW'] == self::$password) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username1 && $_SERVER['PHP_AUTH_PW'] == self::$password1) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username2 && $_SERVER['PHP_AUTH_PW'] == self::$password2) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username3 && $_SERVER['PHP_AUTH_PW'] == self::$password3) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username4 && $_SERVER['PHP_AUTH_PW'] == self::$password4) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username5 && $_SERVER['PHP_AUTH_PW'] == self::$password5) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username6 && $_SERVER['PHP_AUTH_PW'] == self::$password6) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username7 && $_SERVER['PHP_AUTH_PW'] == self::$password7) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username8 && $_SERVER['PHP_AUTH_PW'] == self::$password8) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username9 && $_SERVER['PHP_AUTH_PW'] == self::$password9) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username10 && $_SERVER['PHP_AUTH_PW'] == self::$password10) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username11 && $_SERVER['PHP_AUTH_PW'] == self::$password11) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username12 && $_SERVER['PHP_AUTH_PW'] == self::$password12) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username13 && $_SERVER['PHP_AUTH_PW'] == self::$password13) ||  
     
    ($_SERVER['PHP_AUTH_USER'] == self::$username14 && $_SERVER['PHP_AUTH_PW'] == self::$password14)
     
   )
    {
    return true;
  } else {
    header('WWW-Authenticate: Basic realm="Please login."');
    header('HTTP/1.0 401 Unauthorized');
    die("Usuário ou senha incorretos!");
  }
}
}

if(Authenticator::check()){
//echo "Você tem acesso ao conteúdo!";
//$pagina = "content.html";

if(isset($_POST)){
  if(isset($_POST["body"])){
    $fopen = fopen($pagina,"w+");
    fwrite($fopen,$_POST["body"]);
    fclose($fopen);
  }
}
}
else return null;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <link type="text/css" rel="stylesheet" href="public/css/arf.css"/>
    <script type="text/javascript" src="public/js/d3.v3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>GSI RJ Mind Map</title>
  </head>

<body>
<div id="body">
  <div id="header" >
    Mind Map GSI-RJ <br>
    <hr/>
  </div>
  
</div>

<script src="public/js/arf_private.js"></script>

</hr>
</body>
  <footer>
   
  </footer>
  

</html>
