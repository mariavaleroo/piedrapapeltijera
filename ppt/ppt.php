<html>
<head>
<?php

$pop_out='none';
$pop_up='block';
$condicion=$pop_out;
if(isset($_POST['btn'])){
    $condicion=$pop_up;
    
}
if(isset($_POST['cerrar'])){
    $condicion=$pop_out;
   
}
?>
    <style>
        body{
            background:url(images.jpg);
            background-size:cover;
            background-repeat:no-repeat;
        }
        input[name="piedra"]{
            background: url(piedra2.png);
            cursor: pointer;
            padding: 100px;
            background-size: cover;
            background-repeat: no-repeat;
            border:none
        }
        input[name="papel"]{
            background: url(papel2.png);
            cursor: pointer;
            padding: 100px;
            background-size: cover;
            background-repeat: no-repeat;
            border:none

        }
        input[name="tijera"]{
            background: url(tijera2.png);
            cursor: pointer;
            padding: 100px;
            background-size: cover;
            background-repeat: no-repeat;
            border:none

        }
        img{
            width:150px;
            background: #ffffff70;
        }
        .form{
            display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    align-content: center;
    background: #ffffff70;
        }
        h1{
            color: white;
    text-align: center;
    font-size: 40px;
        }
        p{
            color: white;
    text-align: center;
    font-size: 40px;
    border: 1px solid white;
    text-align: center;
    background: cadetblue;
    padding: 20px;
    position: absolute;
    bottom: 0px;
    left: 0px;
    right: 0px;
    margin: 0px;

        }
        .todo{
            display: flex;
    justify-content: space-around;
    align-items: center;
        }
        #imagen{
            display:<?php echo $condicion?>;
            position:absolute;
            top: 20%;
            left:20%;
            width:250px;
            height:250px;
        }
        #cerrar{
            position:absolute;
            top:0%;
            right:0% ;
        }
        #boton{
            position:absolute;
            top:10%;
            left:10%    
        }
    </style>
</head>
</html>
<?php
session_start();
if(isset($_POST["inicio"])){
    $_SESSION["nombre"]=$_POST["nombre"];
};
echo "<h1>".$_SESSION["nombre"]." VS Máquina</h1>";
echo "<div class='todo'>";

echo "<div class='form'>
<form action='' class='piedra' method='post'>
<input type='submit' name='piedra' value=''>
</form>

<form action='' class='papel' method='post'>
<input type='submit' name='papel' value=''>
</form>

<form action='' class='tijera' method='post'>
<input type='submit' name='tijera' value=''>
</form>

</div>
<div id='imagen'><img src='chuleta.png' style='width:100%;height:100%;' alt=''>
        <form action='' method='post'><input type='submit' name='cerrar' value='Cerrar' id='cerrar'></form>
    </div>
    <div id='boton'>
        <form action='' method='post'>
            <input type='submit' value='chuleta' name='btn'>
        </form>
    </div>
";
$_SESSION["resultado"]=mt_rand(1,3);
//1=piedra
//2=papel
//3=tijera
if(isset($_POST["piedra"])){

        echo "<div class='maquina'>";
        if($_SESSION["resultado"]==1){
            echo "<img class='imagen' src='piedra2.png'>";
        }elseif($_SESSION["resultado"]==2){
            echo "<img class='imagen' src='papel2.png'>";

        }else{
            echo "<img class='imagen' src='tijera2.png'>";

        }

    if($_SESSION["resultado"]==1){
        echo "<p>Has empatado</p>";
    }elseif($_SESSION["resultado"]==2){
        echo "<p>Has perdido</p>";
    }else{
        echo "<p>Has ganado</p>";
    }
    echo "</div>";

    
}


if(isset($_POST["papel"])){
    echo "<div class='maquina'>";

    if($_SESSION["resultado"]==1){
        echo "<img class='imagen' src='piedra2.png'>";
    }elseif($_SESSION["resultado"]==2){
        echo "<img class='imagen' src='papel2.png'>";

    }else{
        echo "<img class='imagen' src='tijera2.png'>";

    }


    if($_SESSION["resultado"]==1){
        echo "<p>Has ganado</p>";
    }elseif($_SESSION["resultado"]==2){
        echo "<p>Has empatado</p>";
    }else{
        echo "<p>Has perdido</p>";
    }
    echo "</div>";

}


if(isset($_POST["tijera"])){
    echo "<div class='maquina'>";

    if($_SESSION["resultado"]==1){
        echo "<img class='imagen' src='piedra2.png'>";
    }elseif($_SESSION["resultado"]==2){
        echo "<img class='imagen' src='papel2.png'>";

    }else{
        echo "<img class='imagen' src='tijera2.png'>";

    }

    if($_SESSION["resultado"]==1){
        echo "<p>Has perdido</p>";
    }elseif($_SESSION["resultado"]==2){
        echo "<p>Has ganado</p>";
    }else{
        echo "<p>Has empatado</p>";
    }
    echo "</div>";

}

echo "</div>";


?>

