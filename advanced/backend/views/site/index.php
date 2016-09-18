<?php

use maddoger\widgets\Highcharts;

/* @var $this yii\web\View */

$this->title = 'Trabajos de Investigación';
?>




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

           

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->


          
          


