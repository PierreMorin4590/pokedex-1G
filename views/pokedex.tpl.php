<main class="main">
        <div class="main__div">
            <div class="main__div--pokemon">
                <img src="<?= $pokemonData->sprites->front_default; ?>" width="180" alt="">
            </div>
            <div class="main__div--number">
                <?='#'.$pokemonDataSpecies->id ?>
            </div>
            <div class="main__div--name">
                <?=$pokemonDataSpecies->names[4]->name; ?>
            </div>
        </div>
    </main>