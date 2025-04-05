<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Libreria</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/miEstilo.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <div class="col-12">
        <?php
        include "templates/nav.php";
        ?>
    </div>



    <!-- Contact-->
    <section class="page-section" id="contacto">
        <div class="container px-4 px-lg-5" >
            <div class="row gx-4 gx-lg-5 justify-content-center bg-opacity-25 bg-secondary" id="textForm">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0 text-white">Queremos estar en contacto contigo!</h2>
                    <hr class="divider" />
                    <p class="text-white mb-5 ">Sabemos que te apasiona leer, permitenos mantenerte a tanto de las novedades!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="procesandoForm.php" method="post">
                        <!-- Nombre-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Escribe tu nombre..." data-sb-validations="required" />
                            <label for="nombre">Nombre completo</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Campo es obligatorio.</div>
                        </div>
                        <!-- Correo electronico-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="correo" name="correo" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="correo">Correo electronico   </label>
                            <div class="invalid-feedback" data-sb-feedback="correo:required">Campo es obligatorio.</div>
                            <div class="invalid-feedback" data-sb-feedback="correo:email">Ingrese un correo correcto.</div>
                        </div>
                        <!-- Fecha-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="fecha" name="fecha" type="date" placeholder="example@example.com" data-sb-validations="required" />
                            <label for="fecha">Ingrese la fecha</label>
                            <div class="invalid-feedback" data-sb-feedback="fecha:required">Debe de ingresar una fecha.</div>
                        </div>
                        <!-- Asunto-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="asunto" name="asunto" type="text" placeholder="Escribe el asunto..." data-sb-validations="required" />
                            <label for="asunto">Asunto</label>
                            <div class="invalid-feedback" data-sb-feedback="asunto:required">Campo es obligatorio.</div>
                        </div>
                        <!-- Comentario-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="comentario" name="comentario" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="comentario">Comentario</label>
                            <div class="invalid-feedback" data-sb-feedback="comentario:required">Debe escribir un comentario.</div>
                        </div>
                        <!-- Boton-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl " id="btnRegistrar" name="btnRegistrar" type="submit">Registrar</button></div>
                    </form>
                </div>
            </div>
            
        </div>
    </section>





    <!-- Footer-->
    <?php
    include "templates/footer.php";
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>