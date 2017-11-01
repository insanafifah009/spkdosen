<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Pengabdian</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">DATA PENGABDIAN</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="<?php echo base_url('dosen/Menudupak/addKegiatan')?>">
              <div class="box-body">
                <div class="form-group required">
                   <label class="col-sm-2">NIP/NIDN Dosen</label>
                   <div class="col-md-12">
                   <input type="text" class="form-control" placeholder="Masukkan NIP/NIDN" name="txt_nip" value="<?php echo $this->session->userdata('nip') ?>" readonly>
                   </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-4" for=""> Unsur Kegiatan Pengabdian</label>
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
                  <label class="col-sm-4 " for="">Sub Kegiatan Pengabdian</label>
                  <div class="col-md-12">
                  <select class="form-control" nama="cb_detail" id="cb_detail">
                    <option value="">Pilih Sub Kegiatan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2" for="">Uraian Pengabdian</label>
                  <div class="col-md-12">
                  <select class="form-control" nama="cb_uraian" id="cb_uraian">
                     <option value="">Pilih Uraian Kegiatan</option>
                  </select>
                </div>
              </div>
              <div class="form-group required">
                   <label class="col-sm-2">Kegiatan</label>
                   <div class="col-md-12">
                   <input type="text" id="exampleInputFile" class="form-control" placeholder="Kegiatan Pengabdian" name="txt_keg">
                   </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-12">Bentuk</label>
                   <div class="col-md-12">
                   <input type="text" id="exampleInputFile" placeholder="Produk yang dihasilkan" class="form-control" placeholder="Bentuk Pengabdian" name="txt_bentuk">
                   </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2">Tempat</label>
                   <div class="col-md-12">
                   <input type="text" id="t" class="form-control" placeholder="Tempat Pengabdian" name="txt_tempat">
                   </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2">Tanggal</label>
                   <div class="col-md-12">
                   <input type="text" id="t" class="form-control" placeholder="Tanggal Pengabdian" name="txt_tgl">
                   </div>
              </div>
              <div class="form-group">
                   <label class="col-sm-2" for="exampleInputFile">Lampiran SK</label>
                  <input type="file" id="exampleInputFile" name="txt_lamp">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </section>
  
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
                url : "<?php echo base_url("menudupak/get_unsur_pengabdian");
                ?>",
                chace: false,
              });

              $("#cb_unsur").change(function() {
                var nilai = $(this).val();
                if (nilai > 0){
                  $.ajax({
                    data: {
                      modul: 'unsur_kegiatan',
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
                      modul: 'uraian_kegiatan',
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