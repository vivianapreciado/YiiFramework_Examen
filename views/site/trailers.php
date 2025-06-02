<?php

/** @var yii\web\View $this */

$this->title = 'Trailers Destacados';
?>

<div class="site-trailers">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Trailers Destacados</h1>
        <p class="lead">Disfruta de los mejores trailers de películas directamente desde YouTube.</p>
    </div>

    <div class="row">
        <!-- Trailer 1 -->
        <div class="col-lg-4 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qrl1JWv4df8" allowfullscreen></iframe>
            </div>
            <h5 class="mt-2">Evil Dead: El Despertar - Tráiler Oficial en Español Latino</h5>
        </div>

        <!-- Trailer 2 -->
        <div class="col-lg-4 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LGJP84iSdC8" allowfullscreen></iframe>
            </div>
            <h5 class="mt-2">La abuela | Tráiler oficial | HBO Max</h5>
        </div>

        <!-- Trailer 3 -->
        <div class="col-lg-4 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/o58A5Z7e8Kg" allowfullscreen></iframe>
            </div>
            <h5 class="mt-2">Black Phone 2023 Español Latino</h5>
        </div>
    </div>
</div>
