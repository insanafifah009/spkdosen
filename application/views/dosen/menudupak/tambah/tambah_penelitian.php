<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Penelitian</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">DATA PENELITIAN</li>
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
            <form method="POST" action="<?php echo base_url('dosen/Menudupak/addJudul')?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 " for="">Unsur Kegiatan Penelitian</label>
                  <div class="col-md-12">
                    <input type="hidden" name="id_dosen" value="<?php echo $this->session->userdata('id') ?>">
                  <select class="form-control" name="cb_unsur" id="cb_unsur">
                    <option value="">Pilih Unsur</option>
                    <?php foreach ($penelitian as $tes):?>
                      <option value="<?php echo $tes['id_unsur']?>"> <?php echo $tes ['nama_unsur']?> </option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
               <div class="form-group">
                  <label class="col-sm-4" for="">Sub Kegiatan Penelitian</label>
                  <div class="col-md-12">
                  <select class="form-control" nama="cb_detail" id="cb_detail">
                    <option value="">Pilih Sub Kegiatan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2" for="">Uraian Penelitian</label>
                  <div class="col-md-12">
                  <select class="form-control" nama="cb_uraian" id="cb_uraian">
                    <option value="">Pilih Uraian Kegiatan</option>
                  </select>
                </div>
              </div>
              <div class="form-group required">
                   <label class="col-sm-4">Judul Penelitian/Karya Ilmiah</label>
                   <div class="col-md-12">
                   <input type="text" name="txt_judul" class="form-control" placeholder="Judul Penelitian">
                   </div>
              </div>
              <div class="form-group required">
                   <label class="col-sm-2">Link</label>
                   <div class="col-md-12">
                   <input type="text" id="exampleInputFile" name="txt_link" class="form-control" placeholder="Link penelitian">
                   </div>
              </div>
              <div class="form-group required">
                   <label class="col-sm-2">Satuan Hasil</label>
                   <div class="col-md-12">
                   <input type="text" name="txt_satuan" id="exampleInputFile" class="form-control">
                   </div>
              </div>
              <div class="form-group required">
                   <label class="col-sm-2">Jumlah Volume Kegiatan</label>
                   <div class="col-md-12">
                   <input type="text" name="txt_jumlahv" id="exampleInputFile" class="form-control">
                   </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2">Angka Kredit</label>
                   <div class="col-md-12">
                     <input type="text" name="txt_ak" id="exampleInputFile" class="form-control">
                   </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2">Jumlah Angka Kredit</label>
                   <div class="col-md-12">
                     <input type="text" name="txt_jumlahak" id="exampleInputFile" class="form-control">
                   </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2">Lampiran SK</label>
                   <div class="col-md-12">
                     <input type="file" id="t" name="txt_lamp">
                   </div>
              </div>
          </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

          <script type="text/javascript">
            $(document).ready(function(){
              $.ajaxSetup({
                type : "POST",
                url : "<?php echo base_url("dosen/menudupak/get_unsur_penelitian");
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