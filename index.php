<?php

$pokemon = "http://pokeapi.co/api/v2/pokemon/";
$pokemonSpecies = "http://pokeapi.co/api/v2/pokemon-species/";

$id = 5;

$data = file_get_contents($pokemon.$id.'/');
$dataSpecies = file_get_contents($pokemonSpecies.$id.'/');

$pokemonData = json_decode($data);
$pokemonDataSpecies =json_decode($dataSpecies);

$pokemonData->sprites->front_default;

//print_r($pokemon->names);
echo $pokemonDataSpecies->names[4]->name;
echo $pokemonDataSpecies->id;

require_once './views/header.tpl.php';
require_once './views/pokedex.tpl.php';
require_once './views/footer.tpl.php';