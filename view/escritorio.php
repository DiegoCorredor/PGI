<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'template/header.php';

if ($_SESSION['escritorio']==1)
{


?>
<br>
<br>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper"> 
        
      <div id="layoutSidenav_content" >
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">BIENVENIDOS - SISTEMA DE GESTION DE SEMILLEROS UPTC</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Señores estudiantes esta pagina web se enfoca para el uso exclusivo de los semilleros de investigación de la UPTC seccional Sogamoso 
                              con el fin de tener un mejor control de los aspectos de investigación</li>
						</ol>

                        <center><img src="images/uptc_logo_full.jpg" class="img-fluid" alt="Responsive image"></center>

                        
					</div>
				</main>

			</div>
     
    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
}
else
{
  require 'noacceso.php';
}

require 'template/footer.php';
?>

<?php 
}
ob_end_flush();
?>


