<?php

    function AboutPersonalizado($nombre){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php
            echo '<base href="http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/" target="_blank">';
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php 
            if($nombre==="exe"){
                echo '<img src="images/exe.jpeg" width="650px" alt="exe">';
            }   
        ?>
    </body>
    </html>
<?php
}
    function About(){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>About WEB II</h1>
        <img src="images/about.jpg" alt="about">
    </body>
    </html>

<?php
    }
?>