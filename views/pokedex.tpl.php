<main class="main">
    <div class="main__div">
        <div class="main__div--pokemon">
            <!-- On dynamise l'affichage de l'image du Pokémon -->
            <img src="<?= $pokemonData->sprites->front_default; ?>" width="180" alt="">
        </div>
        <div class="main__div--number">
            <!-- On dynamise l'affichage du numéro du Pokémon -->
            <?= '#' . $pokemonDataSpecies->id ?>
        </div>
        <div class="main__div--name">
            <!-- On dynamise l'affichage du nom français du Pokémon -->
            <?= $pokemonDataSpecies->names[4]->name; ?>
        </div>
    </div>
</main>