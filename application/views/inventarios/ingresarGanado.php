
<body>

    <div id="wrapper">

        <div id="page-wrapper">
          
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ingresa Ganado al inventario.</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ingresa los datos del ganado
                        </div>
                            
                        <div class="panel-body">
                            <div class="row">
                            
                            <?= form_open_multipart("inventario/insertar") ?>
                            <?php 
                                $chapeta = array('type' => "text" , 
                                                 'class' => "form-control",
                                                 'placeholder' => '0000-00',
                                                 'name' => "chapeta" );

                              ?>

                                <div class="form-group col-lg-6" >

                                    <?= form_label('Ingrese la chapeta:','chapeta'); ?>
                                    <?= form_input($chapeta); ?>
                                    <input type="file" name="userfile" size="20" />
                                    <?= form_submit('Crear','Guardar');?>

                                </div>
                                            
                            <?= form_close()?>
                                    
                             </div>  
                                
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


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
