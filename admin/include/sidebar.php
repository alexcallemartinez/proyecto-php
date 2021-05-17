<div class="span3">
    <div class="sidebar">


        <ul class="widget widget-menu unstyled">
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages">
                    <i class="menu-icon icon-cog"></i>
                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                    Gestión de pedidos
                </a>
                <ul id="togglePages" class="collapse unstyled">
                    <li>
                        <a href="todays-orders.php">
                            <i class="icon-tasks"></i>
                            Pedidos de hoy
                            <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($con,"SELECT * FROM Orders where orderDate Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
{
?>
                            <b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
                            <?php } ?>
                        </a>
                    </li>
                    <li>
                        <a href="pending-orders.php">
                            <i class="icon-tasks"></i>
                            Pedidos pendientes
                            <?php	
	$status='Delivered';									 
$ret = mysqli_query($con,"SELECT * FROM Orders where orderStatus!='$status' || orderStatus is null ");
$num = mysqli_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
                            <?php } ?>
                        </a>
                    </li>
                    <li>
                        <a href="delivered-orders.php">
                            <i class="icon-inbox"></i>
                            Pedidos entregadas
                            <?php	
	$status='Delivered';									 
$rt = mysqli_query($con,"SELECT * FROM Orders where orderStatus='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
                            <?php } ?>

                        </a>
                    </li>
                </ul>
            </li>

			<!-- inicia gestionde productos -->

		
            <li>
                <a class="collapsed" data-toggle="collapse" href="#nuevo">
                    <i class="menu-icon icon-cog"></i>
                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
					Gestión de Productos
                 </a>
                <ul id="nuevo" class="collapse unstyled">
                    <li>
                        <a href="category.php">
                            <i class="icon-tasks"></i>
                            Agregar Categoria
						</a>
                    </li>
                    <li>
                        <a href="subcategory.php">
                            <i class="icon-tasks"></i>
							Crear Subcategoría
                        </a>
                    </li>
                    <li>
                        <a href="insert-product.php">
                            <i class="icon-paste"></i>
                            Insertar producto

                        </a>
                    </li>
					<li>
                        <a href="manage-products.php">
                            <i class="icon-table"></i>
                            Listado de Productos

                        </a>
                    </li>
                </ul>
            </li>
        
		<!-- finde gestion de productos -->

           <!-- Inico de getios de usuarios -->
			<li>
                <a class="collapsed" data-toggle="collapse" href="#User">
                    <i class="menu-icon icon-cog"></i>
                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
					Gestión de Usuarios
                 </a>
                <ul id="User" class="collapse unstyled">
                    <li>
                        <a href="manage-users.php">
                            <i class="icon-group"></i>
                            Listado de Usuarios
						</a>
                    </li>
                    
                </ul>
            </li>
			<!-- fin de gestion de usuarios -->
        </ul>

<!-- 
        <ul class="widget widget-menu unstyled"> 
            <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Crear categoría </a></li>
            <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Crear Subcategoría </a></li>
            <li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Insertar producto</a></li>
            <li><a href="manage-products.php"><i class="menu-icon icon-table"></i>Gestionar productos </a></li>

        </ul> -->


        <!--/.widget-nav-->

        <ul class="widget widget-menu unstyled">
            <li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>Registro de inicio de sesión de usuario </a>
            </li>

            <li>
                <a href="logout.php">
                    <i class="menu-icon icon-signout"></i>
                    Cerrar sesión
                </a>
            </li>
        </ul>

    </div>
    <!--/.sidebar-->
</div>
<!--/.span3-->