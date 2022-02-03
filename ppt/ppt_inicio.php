
<html>
<head>
    <style>
        body{
            background:url(images.jpg);
            background-size:cover;
            background-repeat:no-repeat;
            display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
        }

        .inicio{
            padding: 50px;
    background: cadetblue;
        }
        h1{
            color: white;
    text-align: center;
    font-size: 40px;
        }
        input[type="text"]{
            text-align: center;
    border-radius: 18px;
    padding: 10px;
    border: 1px solid darkblue;
        }
        input[type="submit"]{
            text-align: center;
    border-radius: 18px;
    padding: 10px;
    border: 1px solid darkblue;
    background: transparent;
    cursor:pointer
        }
        
 form{
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
 }
    </style>
</head>
</html>

<?php

echo "
<div class='inicio'>
<h1>Introduce tu nombre</h1>
<form action='ppt.php' method='post'>


<input type='text' required name='nombre' placeholder='nombre'>

<input type='submit' name='inicio' value='comenzar'>
</form>

</div>

";

?>