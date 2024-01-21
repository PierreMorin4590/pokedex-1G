# pokedex-1G

## En résumé...
Ce projet a été réalisé de façon personnelle en parallèle de ma formation de Développeur Web Fullstack PHP au sein de l'école [O'clock](https://oclock.io/formations/developpeur-web).

Au moment de réaliser ce projet, nous venions de terminer les 3 premières saisons de la formation O'clock, à savoir :

• Saison 1 : HTML/CSS
• Saison 2 : Découverte des bases de PHP
• Saison 3 : Découverte des bases JavaScript

## Objectifs personnels

Les objectifs que je me suis fixé pour ce projet sont les suivants :

• Afficher de façon dynamique avec PHP l'image, le nom et le numéro d'un Pokemon
• Aller chercher les données mentionnées ci-dessus via l'API [PokéAPI](https://pokeapi.co/) et comprendre comment fonctionne une API
• Pour la partie HTML/CSS, faire apparaître tout cela dans une image de Pokédex

## Comment ça fonctionne ? 

Je n'ai pas été jusqu'à créer une navigation pour ce petit projet car je ne savais pas forcément encore le faire. J'ai donc créé une variable $id qui permet d'afficher aléatoirement les infos d'un Pokémon de la première génération (#1 à #151):

```php
$pokemon = "http://pokeapi.co/api/v2/pokemon/";
$pokemonSpecies = "http://pokeapi.co/api/v2/pokemon-species/";

$id = rand(1, 151);

$data = file_get_contents($pokemon.$id);
$dataSpecies = file_get_contents($pokemonSpecies.$id);

$pokemonData = json_decode($data);
$pokemonDataSpecies =json_decode($dataSpecies);
```

Ce petit projet fonctionne donc en faisant un simple rafraîchissement de la page. 

