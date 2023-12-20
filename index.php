<?php

$pokemon = "http://pokeapi.co/api/v2/pokemon/";
$pokemonSpecies = "http://pokeapi.co/api/v2/pokemon-species/";

$id = rand(1, 151);

$data = file_get_contents($pokemon.$id);
$dataSpecies = file_get_contents($pokemonSpecies.$id);

$pokemonData = json_decode($data);
$pokemonDataSpecies =json_decode($dataSpecies);

// Afficher l'image de face du Pokémon : $pokemonData->sprites->front_default;
// Afficher le nom français du Pokémon : echo $pokemonDataSpecies->names[4]->name;
// Afficher l'id du Pokémon : echo $pokemonDataSpecies->id;
// Afficher le type du Pokémon : print_r($pokemonData->types[0]->type->name);

require_once './views/header.tpl.php';
require_once './views/pokedex.tpl.php';
require_once './views/footer.tpl.php';