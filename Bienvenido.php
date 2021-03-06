<!php
	include("pdm.php");
    $doctor = "SELECT * FROM doctor";
?>
<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/Plantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Grupo1 - Concentrador de Oxigeno</title>
    <!-- InstanceEndEditable -->
    <!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

    <body>
       
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="#" class="navbar-brand tm-site-name">GRUPO 1</a>
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../el proyecto.php"../el projecto.php" class="nav-link">El proyecto</a>
                                </li>
                                <li class="nav-item">
                                    <a href="el equipo.php" class="nav-link">El equipo</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ingresar sesion.php" class="nav-link">Ingresar sesion</a>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>

        <div class="tm-about-img-container">
            
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row tm-2-rows-sm-swap">
                  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 tm-2-rows-sm-down-1"><!-- InstanceBeginEditable name="Contenido" -->
                  <h3 class="tm-gold-text">Bienvenido</h3>
                  <?php
$servername = "remotemysql.com";
$username = "ygEbfhzsHJ";
$password = "BxwlgwCvXX";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
                      <p>Personas asignadas:</p>
                  <p>&nbsp;</p>
                  <table width="200" border="1" align="center">
                    <tr>
                      <th scope="col">Nombre del paciente</th>
                      <th scope="col">Nombre del doctor</th>
                      <th scope="col">Nombre del concentrador</th>
                      <th scope="col">Flujo de oxigeno entregado</th>
                      <th scope="col">Pureza de oxigeno</th>
                      <th scope="col">Saturaci??n del Paciente</th>
                      <th scope="col">Temperatura del paciente</th>
                      <th scope="col">Fecha</th>
                      <th scope="col">Hora</th>
                    </tr>
                    <?php $servername = "remotemysql.com";
$username = "bsBlqdISRU";
$password = "GDPpUdpf5I";
$dbname = "bsBlqdISRU";

// Create connection
$connet = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connet) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT idpaciente.nombre_paciente, doctor.nombre_doctor, signospaciente.nombre_concentrador, signospaciente.flujo_oxigeno, signospaciente.pureza_oxigeno, signospaciente.saturacion, signospaciente.temperatura, signospaciente.fecha, signospaciente.hora FROM idpaciente, doctor, signospaciente WHERE idpaciente.id_doctor = doctor.id_doctor";
$results = mysqli_query($connet, $sql);
					while($row=mysqli_fetch_assoc($results)) {
					?>
                    <tr>
                      <td><?php echo $row["nombre_paciente"];?>&nbsp;</td>
                      <td><?php echo $row["nombre_doctor"];?>&nbsp;</td>
                      <td><?php echo $row["nombre_concentrador"];?>&nbsp;</td>
                      <td><?php echo $row["flujo_oxigeno"];?>&nbsp;</td>
                      <td><?php echo $row["pureza_oxigeno"];?>&nbsp;</td>
                      <td><?php echo $row["saturacion"];?>&nbsp;</td>
                      <td><?php echo $row["temperatura"];?>&nbsp;</td>
                      <td><?php echo $row["fecha"];?>&nbsp;</td>
                      <td><?php echo $row["hora"];?>&nbsp;</td>
                    </tr>
                    <?php } ?>
                  </table>
                  <p>&nbsp; </p>
                  <p>&nbsp; </p>
                  <p>&nbsp;</p><p>&nbsp; </p>
                      <p>&nbsp;</p>
                    <!-- InstanceEndEditable --></div>
                </div>
                
                <div class="row tm-margin-t-mid"></div>
                <div class="row tm-margin-t-mid">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Tecnolog??a PSA</h4>
                            <p class="tm-margin-b-20">Nuestro concentrador utiliza la tecnolog??a PSA para la generaci??n del oxigeno, garantizando una concentraci??n de ox??genos mayor a 93%</p>
                                
                      </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">M??scara Snorkel</h4>
                            <p class="tm-margin-b-20">Nuestro concentrador cuenta con una m??scara snorkel para aumentar la eficacia al suministrar al paciente</p>
                              
                      </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Base de datos para monitoreo</h4>
                            <p class="tm-margin-b-20">Nuestra soluci??n cuenta con conexi??n a internet que permite al m??dico hacer seguimiento de los signos vitales del paciente</p>
                                
                      </div>  

                    </div>
                </div> <!-- row -->

            </div>
        </section>
        
        <footer class="tm-footer">
            <div class="container-fluid">
                <div class="row"><!-- Add the extra clearfix for only the required viewport 
                        http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
                    -->
                  <div class="clearfix hidden-lg-up"></div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Proyecto realizado en el curso de Proyecto de Dise??o Mecatr??nico de la PUCP</h3><hr class="tm-margin-b-30">
                            <p class="tm-margin-b-30">&nbsp;</p>
                      </div>
                        
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Ima??genes Referenciales</h3>
                            <div class="tm-margin-b-30"><img src="img/tm-img-100x100-2.jpg" alt="Image" class="tm-footer-thumbnail">
                            <img src="img/tm-img-100x100-3.jpg" alt="Image" class="tm-footer-thumbnail"></div>
                            <p class="tm-margin-b-20">&nbsp;</p>
                        </div>
                        
                    </div>


                </div>

                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                        <p class="tm-copyright-text">Copyright 2021 Grupo 1 SAC</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
       
</body>
<!-- InstanceEnd --></html>