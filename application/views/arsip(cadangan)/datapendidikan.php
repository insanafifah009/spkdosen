 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Kegiatan Pendidikan</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo site_url('Datadosen/input')?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Jenis Pendidikan</label>
                  <select class="form-control" name="in_s">
                    <option value="aaaaaa">Mengikuti pendidikan dan memperoleh gelar doktor atau sederajat</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Lampiran SK</label>
                  <input type="file" id="exampleInputFile">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" >Submit</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>
  
  </div>
          <!-- /.box -->