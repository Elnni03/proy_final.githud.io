

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
         <div>
         <?php
             include "templates/nav.php";
            ?>
         </div>
            
       
   <section class="page-section " id="listado">   
        
       <div class="container px-4 px-lg-5" id="miListado">
    <div class="col-12 text-center bg-secondary text-white border-bottom p-4">
    <h2 class="text-center mt-0 ">Listado de libros disponibles</h2>
    <hr class="divider" />
    </div>

    <div class="col-12 text-center">
        <table class=" table table-dark table-striped" id="tabla">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Total de ventas</th>
                    <th scope="col">Notas</th>
                </tr>
            </thead>

            <tbody>

                <?php
                require 'templates/conexion.php';
                $stmt = $pdo->query('SELECT titulo, tipo, precio, total_ventas, notas FROM titulos');

                while ($row = $stmt->fetch()) { ?>
                    <tr>
                        <td><?= $row['titulo'] ?></td>
                        <td><?= $row['tipo'] ?></td>
                        <td><?= '$'.$row['precio'] ?></td>
                        <td><?= $row['total_ventas'] ?></td>
                        <td><?= $row['notas'] ?></td>
                    </tr>
                <?php
                }
                ?>


            </tbody>
        </table>
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
