<!--codigo que impide que el usario entre sin iniciar sesión-->

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Debes iniciar sesión primero";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!doctype html>
<html class="no-js" lang="en">

<head>

<!--referencias a css-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inventory Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                
                            </li>
                            
                           
                            
                            <li class="active">
                                <a href="table.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Item Records</span></a>
                               
                            </li>
                            
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->


        
        <!-- CONTENIDO PRINCIPAL -->
        <div class="main-content">
            <!-- ENCABEZADO DE LA PÁGINA -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- PANEL DE BUSQUEDA Y NAVEGACIÓN-->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Busqueda..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    
                    <!-- AREA DE PERFIL -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        
                    </div>
                </div>
            </div>
            
            <!-- header area end -->
            <!-- titulo de pagina -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Inicio</a></li>
                                <li><span>Reportes de material</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- imagen de avatar -->
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                
                               <a class="dropdown-item" href="index.php?logout='1'">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            
            <!--PANEL DE AGREGAR MAS DATOS-->
            <div>
            
                    <h1 style="text-align:center">Agrega un Producto</h1>
                    <body>
                    <form method="POST" class="form-inline" action="additem.php">
                    <div class="form-group">
                    <label for="name">Nombre del producto</label>
                    <input type="text" class="form-control input-sm" name="product_name">
                    
                </div>
                         <div class="form-group">
                        <label for="name">Precio</label>
                        <input type="text" class="form-control input-sm" name="price">
                </div>
                        <div class="form-group">
                        <label for="name">Cantidad</label>
                        <input type="number" name="quant" class="form-control input-sm"id="quant" min="1" max="">
                    </div>
                    </div>
                         <div class="form-group">
                        <label for="name">Nombre de Modelo</label>
                        <input type="text" class="form-control input-sm" name="ModelName">
                </div>

                        <div class="form-group">
                        <label for="name">Color</label>
                        <input type="text" class="form-control input-sm" name="Color">
                </div>
                <div class="form-group">
                        <label for="name">Status</label>
                        <input type="text" class="form-control input-sm" name="Status">
                </div>
                <div class="form-group">
                        <label for="name">StandarCost</label>
                        <input type="number" class="form-control input-sm" name="StandarCost">
                </div>
                <div class="form-group">
                        <label for="name">Weight</label>
                        <input type="text" class="form-control input-sm" name="Weight">
                </div>
                        <button type="submit" class="btn btn-default" name="add">Agregar</button>
                
                </form> 
                </body>
            <div class="main-content-inner" width = "70%" >
                <div class="row">
                   
                    <!-- TABLA DE LISTAR DATOS-->
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Products</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-dark text-center">
                                            <thead class="text-uppercase">
                                                <tr class="table-active">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col"> Model Name</th>
                                                    <th scope="col">Color</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col"> StandarCost</th>
													 <th scope="col">Weight </th>
													  
                                                </tr>
                                            </thead>
                                            <tbody>

                    <!--TOMO LOS DATOS DE LA BASE DE DATOS Y LE OTORGO PERMISOS -->
			<?php 
               $conn = new mysqli("localhost","luis","VFMv7n0GotPCIGxl","inventorymanagement");
               $sql = "SELECT * FROM product";
               $result = $conn->query($sql);
					$count=0;
               if ($result -> num_rows >  0) {
				  
                 while ($row = $result->fetch_assoc()) 
				 {
					  $count=$count+1;
                   ?>
                  
                   <!--RECOGO LOS CAMPOS DE LA BASE DE DATOS-->
                   <tr>
                    <th><?php echo $count ?></th>
                      <th><?php echo $row["product_name"] ?></th>
                      <th><?php echo $row["price"]  ?></th>
                      <th><?php echo $row["quantity"]  ?></th>
					  <th><?php echo $row["ModelName"]  ?></th>
                      <th><?php echo $row["Color"]  ?></th>
                      <th><?php echo $row["Status"]  ?></th>
                      <th><?php echo $row["StandarCost"]  ?></th>
                      <th><?php echo $row["Weight"]  ?></th>
            					  <th> <a href="up"Edit></a><a href="edit.php?id=<?php echo $row["product_id"] ?>">Edit</a> <a href="up"Edit</a><a href="delete.php?id=<?php echo $row["product_id"] ?>">Delete</a></th>
                    
                      
                    </tr>
            <?php
                 
                 }
               }

            ?>

                                            </tbody>
                                        </table>
           
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>


</div>   
                    </div>
                    <!-- Contextual Classes end -->
                   
        <!-- main content area end -->
      
<html>
<head>
	<title>AGREGAR PRODUCTO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

</html>
    


  </div>

    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
