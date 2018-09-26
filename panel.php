<?php 
	@session_start();
		
	if(!$_SESSION['user_name'] and !$_SESSION['user_login_status']){
	
		echo '<script> location.href="index.php";</script>';

		}
$es=$_SESSION['estado'];

if($es==1){
     echo "<script>alert(':::Acceso Restringido para Usted...!')</script>"; 
 
   echo '<script> location.href="index.php";</script>';
    
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:::SISVETERINARIA:::</title>
    <link rel="shortcut icon" href="img/ico.png" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
      <?php include('nav.php'); ?>  
        <!--/. NAV TOP  -->
          <?php include('menu.php'); ?> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                 <div class="col-md-6">
                        <h1 class="page-header">
                            SISVETERINARIA EIRL <small>Sistema de Gestión veterinaria.
                          
                            </small>
                        </h1>
                    </div>
                    
                <div  class="col-md-6">
                 <div class="panel panel-success">
            <div class="panel-heading">Bienvenido , Estimado(a):</div>
            <div class="panel-body">
                <img src="img/man.png" alt="chat 24 horas" title="chat 24 horas" class="pull-right" width="70" height="80">
                <p><strong><?php echo $apellidos.' '.$nombres;   ?></strong></p>
                <div class="text-left"> 
                <a href="login.php?logout"><button type="button" class="btn btn-warning">Cerrar Sesi&oacute;n	</button></a>	
                
                </div>
             </div>
      </div>    
                </div>
                   
                    
                </div>
                <!-- /. ROW  -->

                <div class="row">
                  
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <h3><?php $año= date('Y');
                                    $sql="SELECT count(*)as num  FROM t_usuario ";
                                    $ejecute=mysqli_query($conexion,$sql);
                                    $row=mysqli_fetch_assoc($ejecute);
                                    echo $row['num'];
                                ?>
</h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                
                                <?php echo 'Uauarios '; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                                <h3>52,160 </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                Sales

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa fa-comments fa-5x"></i>
                                <h3>15,823 </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                Comments

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                <h3>36,752 </h3>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                No. of Visits

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">


                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bar Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Donut Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->
                <!-- /. ROW  -->
				<?php include('footer.php'); ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>