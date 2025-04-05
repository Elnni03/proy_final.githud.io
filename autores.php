
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
       
        
        
        <!-- autores-->
        <section class="page-section bg-dark" id="autores">
        
        <div class="col-lg-12 text-center">
    <h2 class="text-white mt-0 text-center">Autores</h2>
    <hr class="divider divider-light" />
</div>
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-8 text-center">
            <table class=" table table-light table-striped" id="tabla">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Ciudad</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    require 'templates/conexion.php';
                    $stmt = $pdo->query('SELECT nombre, apellido, pais, ciudad FROM autores');

                    while ($row = $stmt->fetch()) { ?>
                        <tr>
                            <td><?= $row['nombre'] ?></td>
                            <td><?= $row['apellido'] ?></td>
                            <td><?= $row['pais'] ?></td>
                            <td><?= $row['ciudad'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>


                </tbody>
            </table>
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
