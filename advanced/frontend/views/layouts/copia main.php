<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
#use miloschuman\highcharts;
use maddoger\widgets\Highcharts;
/*   ****
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

use common\widgets\Alert; ***** */

###########AppAsset::register($this);
$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>

          <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Ciclo</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Proyectos de Grado</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Offline  </small>
                  <span class="hidden-xs">.  Güilbian Rodríguez</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      Programador
                      <small>guilbian.rodriguez.b@upch.pe</small>

                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Proyectos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="almacen/articulo"><i class="fa fa-circle-o"></i> Listado</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i> Informes</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i> Gráficos</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i> Buscar...</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Personas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Estudiantes</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Asesores</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Jurados</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Buscar...</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Trabajos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i> Maestrias</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Doctorados</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Publicaciones</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Sustentaciones</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso de usuario</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Modificar</a></li>
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Acceder</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Exportar </span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Hoja de Carculo</span>
                <small class="label pull-right bg-green">Excel</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca de...</span>
                <small class="label pull-right bg-yellow">?</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Trabajos de Investigación de la escuela de Posgrado Victor Alzamora Castro</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                                  <!--Contenido-->
                              <h3>Contenido</h3>

                              <?php 

                              echo Highcharts::widget([
        'chartVariable' => 'cpuChart',
        'options' => [
            'style' => 'width: 30%; height: 150px;',
        ],
        'clientOptions' => [
            'chart' => [
                'type' => 'line',
            ],
            'title' => [
                'text' => 'Tesis',
            ],
            'xAxis' => [
                'type' => 'datetime',
                'tickPixelInterval' => 150,
                'maxZoom' => 20 * 2000,
            ],
            'yAxis' => [
                'min' => 0,
                'max' => 100,
                'title' => [
                    'text' => '%',
                ],
            ],
            'series' => [
                [
                    'name'=> 'Core 1',
                    'data'=> [10,50,100],
                ],
                 [
                    'name'=> 'Core 1',
                    'data'=> [100],
                ],
                [
                    'name'=> 'Core 1',
                    'data'=> [50],
                ],
                 [
                    'name'=> 'Core 1',
                    'data'=> [80],
                ],
                [
                    'name'=> 'Core 2',
                    'data'=> [5],
                ],
            ],
        ],
    ]);

                               ?>








                                  <!--Fin Contenido-->
                           </div>
                        </div>
                            
                        </div>
                    </div><!-- /.row -->

             <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Trabajos de Investigación de la escuela de Posgrado Victor Alzamora Castro</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                                  <!--Contenido-->
                              <h3>Contenido</h3>
                                  <!--Fin Contenido-->
                           </div>
                        </div>
                            
                        </div>
                    </div><!-- /.row -->

                     <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Trabajos de Investigación de la escuela de Posgrado Victor Alzamora Castro</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                                  <!--Contenido-->
                              <h3>Contenido</h3>
                                  <!--Fin Contenido-->
                           </div>
                        </div>
                            
                        </div>
                    </div><!-- /.row -->

                     <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Trabajos de Investigación de la escuela de Posgrado Victor Alzamora Castro</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                                  <!--Contenido-->
                              <h3>Contenido</h3>
                                  <!--Fin Contenido-->
                           </div>
                        </div>
                            
                        </div>
                    </div><!-- /.row -->







                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->


          
          









      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016 <a href="#">Escuela de Posgrado</a>.</strong> Todos los derechos Reservados.
      </footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
