	<div class="content-wrapper">
		<section class="content-header">
          <h1>
            INPUT
            <small>DATA PENGUKURAN</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
   <section class="content">
	 <div class="row">
	  <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">INPUT KONDISI MINYAK</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?php echo site_url();?>/pengukuran/add_pengukuran">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Gardu</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="jenis_gardu">
                                            <?php 
                                                foreach ($gardu as $value) {
                                                        echo"<option value=$value->id_gardu>$value->nama_gardu</option>";
                                                    
                                                }
                                            ?>
                                            
                                        </select>
  
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Tgl/Ukur</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="" required>
                      </div>
                    </div>                   
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Warna</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">(BDV)</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Acidity</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Bersih</label>
                      <div class="radio">
                        <label>
                         <div class="col-sm-10">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          
                         </div>
                        </label>
                      </div>  
                    </div>
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Kotor</label>
                      <div class="radio">
                        <label>
                         <div class="col-sm-10">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          
                         </div>
                        </label>
                      </div>  
                    </div>    
                  </div><!-- /.box-body -->
                  \
              </div><!-- /.box -->
			<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">DATA TRAFO</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">CO fuse</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control input-sm" id="inputEmail3" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Bodi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>                   
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Paking</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Bushing TR</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Bushing TM</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Bushing TM</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Posisi Tap</label>
                      <div class="col-sm-10">
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Kebocoran</label>
                      <div class="col-sm-10">
                      <select class="form-control">
                        <option>Bocor</option>
                        <option>Tidak Bocor</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Silicagel</label>
                      <div class="col-sm-10">
                      <select class="form-control">
                        <option> - </option>
                        <option>Jenuh</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Oil Level</label>
                      <div class="col-sm-10">
                      <select class="form-control">
                        <option>Full</option>
                        <option>Medium</option>
                        <option>Low</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">OTI</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">OTI max</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Grounding Trafo</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>                 
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                      </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">	
                    <button type="submit" class="btn btn-info pull-right">SUBMIT</button>
                  </div><!-- /.box-footer -->
               

              </div><!-- /.box -->
           </div>
          </div>
       <div class="col-md-6">
       	<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">INPUT DATA TEMPERATUR RAK</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Kabel</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control input-sm" id="inputEmail3" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Handle</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>                   
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Fuse TR</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div>
                    </div>                    
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  
              </div><!-- /.box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">INPUT DATA TEGANGAN</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    
                  </div>
                    <tr>
                      <th style="width: 15px">RS</th>
                      <th style="width: 15px">ST</th>
                      <th style="width: 15px">RT</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
                <form class="form-horizontal">
                  <div class="box-body">
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                  </div>
                    <tr>
                      <th style="width: 15px">RN</th>
                      <th style="width: 15px">ST</th>
                      <th style="width: 15px">RT</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
          <div class="box box-primary">
          <div class="box-header with-border">
                  <h3 class="box-title">INPUT DATA PENGUKURAN</h3>
                </div>      
          <div class="row">
            <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Jurusan A</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Jurusan B</a></li>
                  <li><a href="#tab_3" data-toggle="tab">Jurusan C</a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                
                  <div class="tab-pane active" id="tab_1">
                <div class="box-body">
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Fasa R </h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      <th style="width: 10px">Fuse</th>
                      <th style="width: 10px">CosPhi</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                    </tr>
                  </table>
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Fasa S </h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      <th style="width: 10px">Fuse</th>
                      <th style="width: 10px">CosPhi</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                    </tr>
                  </table>
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Fasa T </h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      <th style="width: 10px">Fuse</th>
                      <th style="width: 10px">CosPhi</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                    </tr>
                  </table>
                  </table>
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Netral</h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      
                    </tr>
                    
                  </table>
                </div><!-- /.box-body -->
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="box-body">
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Fasa R </h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      <th style="width: 10px">Fuse</th>
                      <th style="width: 10px">CosPhi</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                    </tr>
                  </table>
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Fasa S </h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      <th style="width: 10px">Fuse</th>
                      <th style="width: 10px">CosPhi</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                    </tr>
                  </table>
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Fasa T </h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      <th style="width: 10px">Fuse</th>
                      <th style="width: 10px">CosPhi</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                    </tr>
                  </table>
                  </table>
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Netral</h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      
                    </tr>
                    
                  </table>
                </div><!-- /.box-body -->
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <div class="box-body">
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Fasa R </h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      <th style="width: 10px">Fuse</th>
                      <th style="width: 10px">CosPhi</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                    </tr>
                  </table>
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Fasa S </h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      <th style="width: 10px">Fuse</th>
                      <th style="width: 10px">CosPhi</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                    </tr>
                  </table>
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Fasa T </h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      <th style="width: 10px">Fuse</th>
                      <th style="width: 10px">CosPhi</th>
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      <td><div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                    </tr>
                    
                  </table>
                  <table class="table table-bordered">
                  <div class="box-header with-border">
                    <h3 class="box-title">Netral</h3>
                  </div>
                    <tr>
                      <th style="width: 10px">Beban</th>
                      
                    </tr>
                    <tr>
                      <td>
                      <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="">
                      </div></td>
                      
                    </tr>
                    
                  </table>
                </div><!-- /.box-body -->
                  </div><!-- /.tab-pane -->
 
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->
          </div> <!-- /.row -->
          <!-- END CUSTOM TABS -->


                </form>
            </div>
          </div>
       
          
          
