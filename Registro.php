<?php require_once('Connections/pdm.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "161250288")) {
  $insertSQL = sprintf("INSERT INTO doctor (nombre, contrasena, especialidad) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['contrasena'], "text"),
                       GetSQLValueString($_POST['especialidad'], "text"));

  mysql_select_db($database_pdm, $pdm);
  $Result1 = mysql_query($insertSQL, $pdm) or die(mysql_error());
}

mysql_select_db($database_pdm, $pdm);
$query_Recordset1 = "SELECT * FROM doctor";
$Recordset1 = mysql_query($query_Recordset1, $pdm) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
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
                  <form name="161250288" method="POST" action="<?php echo $editFormAction; ?>">
                    <table width="200" border="1">
                      <tr>
                        <th scope="row">Usuario:</th>
                        <td id="nombre"><label for="nombre"></label>
                        <input type="text" name="nombre" id="nombre"></td>
                      </tr>
                      <tr>
                        <th scope="row">Contraseña:</th>
                        <td id="contrasena"><label for="contrasena"></label>
                        <input type="text" name="contrasena" id="contrasena"></td>
                      </tr>
                      <tr>
                        <th scope="row">Especialidad:</th>
                        <td id="especialidad"><label for="especialidad"></label>
                        <input type="text" name="especialidad" id="especialidad"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="MM_insert" value="161250288">
                  </form>
                  <form name="form2" method="post" action="">
                    <input type="submit" name="Registrar" id="Registrar" value="Registrar">
                  </form>
                  <h3 class="tm-gold-text">&nbsp;</h3>
                    <!-- InstanceEndEditable --></div>
                </div>
                
                <div class="row tm-margin-t-mid"></div>
                <div class="row tm-margin-t-mid">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Tecnología PSA</h4>
                            <p class="tm-margin-b-20">Nuestro concentrador utiliza la tecnología PSA para la generación del oxigeno, garantizando una concentración de oxígenos mayor a 93%</p>
                                
                      </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Máscara Snorkel</h4>
                            <p class="tm-margin-b-20">Nuestro concentrador cuenta con una máscara snorkel para aumentar la eficacia al suministrar al paciente</p>
                              
                      </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Base de datos para monitoreo</h4>
                            <p class="tm-margin-b-20">Nuestra solución cuenta con conexión a internet que permite al médico hacer seguimiento de los signos vitales del paciente</p>
                                
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
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Proyecto realizado en el curso de Proyecto de Diseño Mecatrónico de la PUCP</h3><hr class="tm-margin-b-30">
                            <p class="tm-margin-b-30">&nbsp;</p>
                      </div>
                        
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Imaágenes Referenciales</h3>
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
<?php
mysql_free_result($Recordset1);
?>
