<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/style.css" rel="stylesheet" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Iniciar sesión</title>
</head>

<body>


    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card px-5 py-4" id="form1">
                    <form action="<?php echo base_url('/iniciarSesion')  ?>" method="POST">
                        <div class="form-data" v-if="!submitted">
                            <div class="text-center mb-4">
                                <h4>Iniciar sesión</h4>
                            </div>
                            <div>
                                <label for="exampleInputEmail1" class="form-label">Email </label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más..</div>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                            </div>
                            <div hidden class="mb-3"> <button v-on:click.stop.prevent="submit" id="Enviar" class="btn btn-primary w-100">Iniciar sesión</button> </div>
                        </div>
                        <div class="mb-3"> <button v-on:click.stop.prevent="submit" id="Iniciar" class="btn btn-primary w-100">Iniciar sesión</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="login.js"></script> -->
</body>

</html>