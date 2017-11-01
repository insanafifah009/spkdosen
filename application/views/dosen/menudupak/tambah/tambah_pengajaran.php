  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Pengajaran</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">DATA PENGAJARAN</li>
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
            <form method="POST" action="<?php echo base_url('dosen/Menudupak/addMK')?>">
              <div class="box-body">

              <div class="form-group required">
                   <label class="col-sm-2">NIP/NIDN Dosen</label>
                   <div class="col-md-12">
                   <input type="text" class="form-control" placeholder="Masukkan NIP/NIDN" name="txt_nip" value="<?php echo $this->session->userdata('nip') ?>" readonly>
                   </div>
              </div>
                <div class="form-group">

                  <label class="col-sm-4 " for="">Unsur Kegiatan Pengajaran</label>
                  <div class="col-md-12">
                  <select class="form-control" name="cb_unsur" id="cb_unsur">
                    <option value="">Pilih Unsur</option>
                    <?php foreach ($penelitian as $tes):?>
                      <option value="<?php echo $tes['id_unsur']?>"> <?php echo $tes ['nama_unsur']?> </option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
               <div class="form-group">
                  <label class="col-sm-4" for="">Sub Kegiatan Pengajaran</label>
                  <div class="col-md-12">
                  <select class="form-control" nama="cb_detail" id="cb_detail"><option value="">Pilih Sub Kegiatan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2" for="">Uraian Pengajaran</label>
                  <div class="col-md-12">
                  <select class="form-control" nama="cb_uraian" id="cb_uraian"><option value="">Pilih Uraian Kegiatan</option>
                  </select>
                  </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2">Mata Kuliah</label>
                   <div class="col-md-12">
                   <input type="text" id="exampleInputFile" class="form-control" placeholder="Mata Kuliah" name="txt_mk">
                   </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2" for="">SKS</label>
                  <div class="col-md-12">
                  <select class="form-control" name="txt_sks">
                    <option value="">SKS</option>
                  </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2" for="">Semester</label>
                  <div class="col-md-12">
                  <select class="form-control" name="txt_smt">
                    <option value="">Semester</option>
                  </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2" for="">Tahun Akademik</label>
                  <div class="col-md-12">
                  <select class="form-control" name="txt_tahun"><option value="">Tahun Akademik mengajar</option>
                  </select>
                  </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2">Tempat/Instansi</label>
                   <div class="col-md-12">
                   <input type="text" id="t" class="form-control" placeholder="Tempat/Instansi" name="txt_tempat">
                   </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2">Tanggal</label>
                   <div class="col-md-12">
                   <input type="text" id="t" class="form-control" placeholder="Tanggal" name="txt_tgl">
                   </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2">Lampiran SK</label>
                   <input type="file" id="t" name="txt_lamp">
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /.box -->
          <script type="text/javascript">
            $(document).ready(function(){
              $.ajaxSetup({
                type : "POST",
                url : "<?php echo base_url("menudupak/get_unsur_pengajaran");
                ?>",
                chace: false,
              });

              $("#cb_unsur").change(function() {
                var nilai = $(this).val();
                if (nilai > 0){
                  $.ajax({
                    data: {
                      modul: 'unsur',
                      id: nilai
                    },
                    success: function(respond)
                    {
                      $("#cb_detail").html(respond);
                    }
                    })
                  }
                });

                $("#cb_detail").change(function() {
                var nilai = $(this).val();
                if (nilai > 0){
                  $.ajax({
                    data: {
                      modul: 'uraian',
                      id: nilai
                    },
                    success: function(respond)
                    {
                      $("#cb_uraian").html(respond);
                    }
                    })
                  }
                });

            });
          </script>
        </div>