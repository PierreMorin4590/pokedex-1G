<?php
$base = "http://pokeapi.co/api/v2/pokemon/";
$id = 151;
$data = file_get_contents($base.$id.'/');
$pokemon = json_decode($data);



require_once './views/header.tpl.php';
require_once './views/pokedex.tpl.php';
require_once './views/footer.tpl.php';

