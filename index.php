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
    <?php
    include "templates/nav.php";
    ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">¡Bienvenidos!</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Esta es la libreria mas completa en linea en la Republica Dominicana, podras encontrar los mejores libros para ti!</p>
                    <a class="btn btn-primary btn-xl" href="#about">Conoce más</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Acerca de nosotros-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Acerca de</h2> 
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Mi nombre es Vladimir Mota, este es mi proyecto final de Programacion WEB, esta es una pagina WEB de una libreria/biblioteca en linea. <br><br>

                    Usamos diferentes tecnologias para el desarollo de la misma <br><br>
                    En el frontend usamos HTML, CSS, JavaScript, tambien usamos un framework de CSS llamado Bootstrap <br><br>
                    En el Backend estamos usando PHP y una base de datos de Mysql de donde alimentamos nuestro listado de libros, autores y guardamos el formulario de contactos.
                    </p>
                    
                </div>
            </div>
        </div>
    </section>

    



   
    <!-- Call to action-->
    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <p class="mb-4">Para desarrollo de aplicaciones WEB, puedes contactarnos presionando el siguiente boton.</p>
            <a class="btn btn-light btn-xl" href="https://wa.me/qr/G32DLZC4JV74C1 ">Contactanos</a>
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