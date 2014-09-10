<?php
/* @var $this TPermintaanController */
/* @var $model TPermintaan */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'tpermintaan-f_laporan_p-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // See class documentation of CActiveForm for details on this,
        // you need to use the performAjaxValidation()-method described there.
        'enableAjaxValidation' => false,
    ));
    ?>
 <?php $this->endWidget(); ?>
</div><!-- form -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#buku" role="tab" data-toggle="tab">PERMINTAAN BUKU</a></li>
        <li><a href="#jurnal" role="tab" data-toggle="tab">PERMINTAAN JURNAL</a></li>
        <li><a href="#serial" role="tab" data-toggle="tab">PERMINTAAN SERIAL</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="buku">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box">
                        <h2>Daftar Permintaan Buku</h2>
                        <div class="box">
                            <div class="span6">
                                <form class="well form-inline">
                                    <!-- Date range -->
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Dari Tanggal:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <?php echo $form->dateField($model, 'TGL_PERMINTAAN', array('class'=>'form-control'));?>
                                            
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    
                                    
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Sampai Tanggal:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <?php echo $form->dateField($model, 'TGL_PERMINTAAN', array('class'=>'form-control'));?>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Bahasa</label>
                                        <div class="input-group">
                                        <?php echo $form->dropDownList($modelBk, 'BAHASA', array('prompt'=>'----- Pilih Bahasa -----','1'=>'Indonesia', '2'=>'Inggris', '3'=>'Lainnya'), array('class'=>'form-control'));?>
                                        </div>
                                        <br>
                                     <div class="form-group"> 
                                    <button type="submit" class="btn btn-warning">Search</button>
                                    <a href="<?php echo Yii::app()->request->baseUrl . '/assets/TemplateForm/FormReqBuku.xls'; ?>" class="btn btn-default btn-flat">Download</a>
                                    </div>
                                </form>
                            </div>	
                        </div>                    	
                        <table id="example3" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Anggota</th>
                                    <th>Tgl.Permintaan</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>ISBN</th>
                                    <th>Jenis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Harga</th>
                                    <th>Link Website</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $model): ?>    
                                    <tr>
                                        <td><?php echo $model['ID_ANGGOTA']; ?></td>
                                        <td><?php echo $model['TGL_PERMINTAAN']; ?></td>
                                        <td><?php echo $model['JUDUL']; ?></td>
                                        <td><?php echo $model['PENGARANG']; ?></td>
                                        <td><?php echo $model['ISBN']; ?></td>
                                        <td><?php echo $model['JENIS']; ?></td>
                                        <td><?php echo $model['PENERBIT']; ?></td>
                                        <td><?php echo $model['TAHUN_TERBIT']; ?></td>
                                        <td><?php echo $model['HARGA']; ?></td>
                                        <td><?php echo $model['LINK_WEBSITE']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- jQuery 2.0.2 -->
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                    <!-- page script -->
                    <script type="text/javascript">
                        $(function() {
                            $("#example1").dataTable();
                            $('#example3').dataTable({
                                "bPaginate": true,
                                "bLengthChange": true,
                                "bFilter": false,
                                "bSort": true,
                                "bInfo": false,
                                "bAutoWidth": false
                            });
                        });
                    </script>
                </div>
            </div>
            </div>
            
        </div><!--Buku-->
        <div class="tab-pane" id="jurnal">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box">
                        <h2>Daftar Permintaan Jurnal</h2>
                        <?php
                        // echo CHtml::link('Cetak dokumen', array('cetak/cetak'));
                        ?>
                        <div class="box">

                            <div class="span6">
                                <form class="well form-inline">
                                    <!-- Date range -->
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Dari Tanggal:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Sampai Tanggal:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Bahasa</label><br>
                                        <select class="form-control">
                                            <option>Indonesia</option>
                                            <option>Inggris</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>	
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-warning">Search</button>
                                    <a href="<?php echo Yii::app()->request->baseUrl . '/assets/TemplateForm/FormReqBuku.xls'; ?>" class="btn btn-default btn-flat">Download</a>
                                </form>
                            </div>	
                        </div>   
                        <table id="example4" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Anggota</th>
                                    <th>Tgl.Permintaan</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Jenis</th>
                                    <th>Bahasa</th>
                                    <th>Harga</th>
                                    <th>Link Website</th>
                                </tr>
                            </thead>
                            <tbody>    
                                <?php foreach ($dataJur as $modelJur): ?>
                                    <tr>
                                        <td><?php echo $modelJur['ID_ANGGOTA']; ?></td>
                                        <td><?php echo $modelJur['TGL_PERMINTAAN']; ?></td>
                                        <td><?php echo $modelJur['JUDUL']; ?></td>
                                        <td><?php echo $modelJur['PENGARANG']; ?></td>
                                        <td><?php echo $modelJur['JENIS']; ?></td>
                                        <td><?php echo $modelJur['BAHASA']; ?></td>
                                        <td><?php echo $modelJur['HARGA']; ?></td>
                                        <td><?php echo $modelJur['LINK_WEBSITE']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- jQuery 2.0.2 -->
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                    <!-- page script -->
                    <script type="text/javascript">
                        $(function() {
                            $("#example1").dataTable();
                            $('#example4').dataTable({
                                "bPaginate": true,
                                "bLengthChange": true,
                                "bFilter": false,
                                "bSort": true,
                                "bInfo": false,
                                "bAutoWidth": false
                            });
                        });
                    </script>
                </div>
            </div>
        </div><!--Jurnal-->
        <div class="tab-pane" id="serial">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box">
                        <h2>Daftar Permintaan Serial</h2>
                        <?php
                        // echo CHtml::link('Cetak dokumen', array('cetak/cetak'));
                        ?>
                        <div class="box">

                            <div class="span6">
                                <form class="well form-inline">
                                    <!-- Date range -->
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Dari Tanggal:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Sampai Tanggal:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Bahasa</label><br>
                                        <select class="form-control">
                                            <option>Indonesia</option>
                                            <option>Inggris</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>	
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-warning">Search</button>
                                    <a href="<?php echo Yii::app()->request->baseUrl . '/assets/TemplateForm/FormReqBuku.xls'; ?>" class="btn btn-default btn-flat">Download</a>

                                </form>
                            </div>	
                        </div>   
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Anggota</th>
                                    <th>Tgl.Permintaan</th>
                                    <th>Judul</th>
                                    <th>Volume</th>
                                    <th>Pengarang</th>
                                    <th>Tahun</th>
                                    <th>Jenis</th>
                                    <th>Bahasa</th>
                                    <th>Harga</th>
                                    <th>Link Website</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dataSer as $modelSer): ?>
                                    <tr>
                                        <td><?php echo $modelSer['ID_ANGGOTA']; ?></td>
                                        <td><?php echo $modelSer['TGL_PERMINTAAN']; ?></td>
                                        <td><?php echo $modelSer['JUDUL']; ?></td>
                                        <td><?php echo $modelSer['VOLUME']; ?></td>
                                        <td><?php echo $modelSer['PENGARANG']; ?></td>
                                        <td><?php echo $modelSer['TAHUN']; ?></td>
                                        <td><?php echo $modelSer['JENIS']; ?></td>
                                        <td><?php echo $modelSer['BAHASA']; ?></td>
                                        <td><?php echo $modelSer['HARGA']; ?></td>
                                        <td><?php echo $modelSer['LINK_WEBSITE']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- page script -->
                    <script type="text/javascript">
                        $(function() {
                            $("#example1").dataTable();
                            $('#example2').dataTable({
                                "bPaginate": true,
                                "bLengthChange": true,
                                "bFilter": false,
                                "bSort": true,
                                "bInfo": false,
                                "bAutoWidth": false
                            });
                        });
                    </script>
                </div>
            </div>
        </div><!--Serial-->
    </div><!--LIST-->  
   
<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript">
                        $(function() {
                            //Datemask dd/mm/yyyy
                            $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                            //Datemask2 mm/dd/yyyy
                            $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                            //Money Euro
                            $("[data-mask]").inputmask();

                            //Date range picker
                            $('#reservation').daterangepicker();
                            //Date range picker with time picker
                            $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
                            //Date range as a button
                            $('#daterange-btn').daterangepicker(
                                    {
                                        ranges: {
                                            'Today': [moment(), moment()],
                                            'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                            'Last 7 Days': [moment().subtract('days', 6), moment()],
                                            'Last 30 Days': [moment().subtract('days', 29), moment()],
                                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                                            'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                                        },
                                        startDate: moment().subtract('days', 29),
                                        endDate: moment()
                                    },
                            function(start, end) {
                                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                            }
                            );

                            //iCheck for checkbox and radio inputs
                            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                                checkboxClass: 'icheckbox_minimal',
                                radioClass: 'iradio_minimal'
                            });
                            //Red color scheme for iCheck
                            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                                checkboxClass: 'icheckbox_minimal-red',
                                radioClass: 'iradio_minimal-red'
                            });
                            //Flat red color scheme for iCheck
                            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                                checkboxClass: 'icheckbox_flat-red',
                                radioClass: 'iradio_flat-red'
                            });

                            //Colorpicker
                            $(".my-colorpicker1").colorpicker();
                            //color picker with addon
                            $(".my-colorpicker2").colorpicker();

                            //Timepicker
                            $(".timepicker").timepicker({
                                showInputs: false
                            });
                        });
</script>