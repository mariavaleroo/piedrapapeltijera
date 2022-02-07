<html>
<head>
<script type="text/javascript">
function cerrar(){
    var div=document.getElementById("reglas");
    if(div.style.display="flex"){
        div.style.display="none";
    }else{
        div.style.display="none";

    }
}
function abrir(){
    var div=document.getElementById("reglas");
    if(div.style.display="none"){
        div.style.display="flex";
    }else{
        div.style.display="none";

    }
}
</script>
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
        
        .btn{
            border-radius:5px;
            border:solid 2px #000;
            color:white;
            background-color:blue;
            width:100px;
            
        }
        .reglas{
            display: none;
    align-items: flex-start;
    justify-content: flex-end;
    align-content: flex-start;
    position: absolute;
    top: 0px;
    right: 0px;
        }
        .reglas img{
            width:50%
        }
        .reglas>p{
            color: white;
    text-align: center;
    font-size: 40px;
    border: 1px solid white;
    text-align: center;
    background: cadetblue;
    padding: 20px;
    position: absolute;
    bottom: 75%;
    left: 91%;
    right: 0px;
    margin: 0px;
    top: 0px;
    cursor:pointer
        }
        #abrir p{
            position: absolute;
    top: 0px;
    right: 0px;
    width: 13%;
    height: 4%;
    left: 86%;
    cursor:pointer
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
echo "<div id='abrir'> <p onclick='abrir()'>REGLAS</p></div>";
echo "<div id='reglas' class='reglas'><p onclick='cerrar()'>X</p><img src='chuleta.png'></div>";

?>


