
<body>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inventario del Ganado</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="right">
                        <?php
                            $hoy = getdate();
                            $fecha = $hoy['mday']."-".$hoy['mon'] ."-".$hoy['year']; 
                            echo "fecha: ". $fecha;
                        ?>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="tabla">
                                <thead>
                                    <tr>
                                        <th>Chapeta de la Vaca
                                        <th>Raza</th>
                                        <th>Edad</th>
                                        <th>Cantidad de Leche producida</th>
                                        <th>Ubicada en</th>
                                    </tr>
                                </thead> 
                                <tbody>
                               
                                <? if($inventario): ?>
                                    <? foreach ($inventario->result() as $row): ?>
                                      
                                        <tr class="odd gradeX">
                                            <td><?= $row->chapeta?></td>
                                            <td><?= $row->raza?></td>
                                            <td><?= $row->edad?></td>
                                            <td><?= $row->cant_act_leche?></td>
                                            <td><?= $row->nombre?></td>
                                        </tr>
    

                                    <? endforeach;  ?>
                                <? else: ?>
                                <? endif; ?>
                                   
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>           

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

 <!-- jQuery -->
    <script src="<?= base_url();?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url();?>vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?= base_url();?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url();?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url();?>vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url();?>dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function(){
    $('#tabla').DataTable();
		});
    </script>

</body>

</html>
