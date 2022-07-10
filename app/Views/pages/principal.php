<?php foreach ($temas as $key) : ?>
    <div class="container">
        <div class="card mb-3 ">
            <div class="card-body">
                <h5 class="card-title"><?php echo $key->titulo_tema ?></h5>
                <p class="card-text"><?php echo $key->descripcion_tema ?></p>
                <p class="card-text"><?php echo $key->url_tema ?></p>

                <div class="mb-3">
                    <form action="<?php echo base_url('/ingresarComentario') ?>" method="post">
                        <div hidden>
                            <input type="text" name="id_tema" value="<?php echo $key->id_tema ?>">
                        </div>
                        <input type="text" name="comentario">
                        <button type="submit" class="btn btn-dark position-relative">
                            comentar <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1" fill="#212529" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>
                    </form>
                    <form>
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5">

                            <label for="radio1">★</label>
                            <input id="radio2" type="radio" name="estrellas" value="4">
                            <label for="radio2">★</label>
                            <input id="radio3" type="radio" name="estrellas" value="3">
                            <label for="radio3">★</label>
                            <input id="radio4" type="radio" name="estrellas" value="2">
                            <label for="radio4">★</label>
                            <input id="radio5" type="radio" name="estrellas" value="1">
                            <label for="radio5">★</label>
                        </p>
                    </form>
                    <?php foreach ($comentarios as $key2) : ?>
                        <?php if ($key->id_tema == $key2->id_tema) { ?>
                            <div class="card">
                                <div class="card-body">
                                    <?php echo $key2->descripcion_comentario;                        ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

    <?php endforeach; ?>
    </div>