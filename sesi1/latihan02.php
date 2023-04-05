<?php
    $usr = "";
    $ps = "";
    $eusr = "";
    $eps = "";

    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        $ps = $_POST["txPASSWORD"];

        if( $usr == ""){
            $eusr = "<div style='color:red;font-size:9px;'>user name masih </div>";
         }
    
        if( $ps == ""){
            $eps = "<div style='color:red;font-size:9px;'>password name masih kosong </div>";
        }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form mrnggunakan method POST </title>
</head>
<body>

    <form method="POST" action = "latihan02.php">

    <div>
        user name
        <input type="text" name="txUSER">
        <?=$eusr;?>
    </div>
   
    <div>
        password
        <input type="password" nama="txPASS">
        <?=$eps;?>
    </div>

    <div>
        <button type="submit"> login </button>
    </div>
</form>
    <div>
        <pre>
            user name:<?=$usr?>
            password:<?=$ps?>
        </pre>
    </div>   
    
</body>
</html>