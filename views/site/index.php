<?php

/** @var yii\web\View $this */

$this->title = 'PELIS VI.COM';
?>
<div class="site-index">


    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Películas y Series Gratis</h1>

        
        <h3 class="text-success">top de las películas más vistas en 2025</h3>

        <h3 class="text-primary">mi primera app con Yii Framework</h3>


    
    </div>



    <div class="body-content">
    <div class="row">
        <!-- Card 1: Películas -->
        <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= Yii::getAlias('@web/images/movies/pokemon1.jpg') ?>" class="card-img-top" alt="Movie 1" />
                <div class="card-body">
                    <h5 class="card-title">Pokémon: detective Pikachu</h5>
                    <p class="card-text">Un joven une fuerzas con el detective Pikachu para desentrañar el misterio detrás de la desaparición de su padre. El dúo dinámico descubre una trama tortuosa que representa una amenaza para el universo Pokémon.</p>
                    <a href="https://www.sensacine.com/peliculas/pelicula-138417/" class="btn btn-danger">More Info</a>
                </div>
            </div>
        </div>

        <!-- Card 2: Series -->
        <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= Yii::getAlias('@web/images/movies/dragonball.jpg') ?>" class="card-img-top" alt="Serie 1" />
                <div class="card-body">
                    <h5 class="card-title">Dragon Ball Super Heroes</h5>
                    <p class="card-text">La malvada organización Red Ribbon Army se reúne con nuevos y más poderosos androides, Gamma 1 y Gamma 2, en busca de venganza.</p>
                    <a href="https://www.sensacine.com/peliculas/pelicula-286148/" class="btn btn-danger">More Info</a>
                </div>
            </div>
        </div>

        <!-- Card 3: Anime -->
        <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= Yii::getAlias('@web/images/movies/guerrademundos.jpg') ?>" class="card-img-top" alt="Anime 1" />
                <div class="card-body">
                    <h5 class="card-title">La Guerra de Los Mundos</h5>
                    <p class="card-text">Cuando la Tierra es invadida por los alienígenas, Ray Ferrier se ve obligado a luchar por sobrevivir y salvar la vida de su familia.</p>
                    <a href="https://www.sensacine.com/peliculas/pelicula-287623/" class="btn btn-danger">More Info</a>
                </div>
            </div>
        </div>
    </div>
</div>


