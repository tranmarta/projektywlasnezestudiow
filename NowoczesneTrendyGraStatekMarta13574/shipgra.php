<?php
session_start();

if(!isset($_SESSION['licznik']))
{
    $_SESSION['licznik'] = 0;
}

$_SESSION['licznik']++;

echo 'Odwiedziłeś już '.$_SESSION['licznik'].' podstron!';
?>
<!DOCTYPE html>
<style>
body
{
    font-family: georgia;
    font-size: 32px;
    background-color: aqua;
}
img
{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
h2, p
{
    text-align: center;
}
#game
{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    position: relative;
    outline: 2px solid black;
}
#game img
{
    width: 100%;
    height: 60%;
}

#character
{
    width: 50px;
    height: 50px;
    position: absolute;
    outline: 1px solid blue;
    top: 0px; /*200px*/
    left: 0px; /*210px*/
}
#character img
{
    width: 100%;
    height: 100%;
}
</style>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title> Gra statek Marta13574 </title>
</head>
<body>
<h2> Witaj w naszej grze! </h2>
<p> Poruszaj się swoją postacią i znajdź 3 ukryte przedmioty na mapie </p>
<div id="game">
    <img src="imgg/ship.jpg" usemap="#obszary">
    <map name="obszary">
    <area shape="rect" coords="160,60,208,125" href="x1.html" />
    <area shape="circle" coords="200,100,100" href="x2.html" />
    <area shape="poly" coords="251,193,290,243,384,245,385,195,310,171,302,144,256,148" href="x3.html" />
</map>
<div id="character">
    <img src="imgg/ninja.jpg" alt="ninja">
</div>
</div>
<script>
var move = 10;
var character = document.getElementById("character");
window.onload=()=>
{
    character.style.position="absolute";
    character.style.top=0;
    character.style.left=0;
}
window.onkeydown=(e)=>
{
    switch(e.key)
    {
        case 'ArrowUp':
            character.style.top = parseInt(character.style.top) - move + "px";
            break;
        case 'ArrowDown':
            character.style.top = parseInt(character.style.top) + move + "px";
            break;
        case 'ArrowLeft':
            character.style.left = parseInt(character.style.left) - move + "px";
            break;
        case 'ArrowRight':
            character.style.left = parseInt(character.style.left) + move + "px";
            break;
    }
}
</script>
</body>
</html>