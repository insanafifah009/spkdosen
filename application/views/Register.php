<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISPENDUKAS | Daftarkan reviewer</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo base_url('login')?>"><b>SPK</b>DOSEN</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Daftarkan diri sebagai reviewer</p>
    <div class="alert alert-success" style="display: none;"></div>

    <form action="<?php echo base_url('login/daftarReviewer')?>" method="post">
      <?= validation_errors()?>
      <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <select class="form-control" name="fakultas" id="fakultas">
              <option value="">Pilih Fakultas</option>
              <?php foreach ($fakultas as $row):?>
                <option value="<?php echo $row['id_fak']?>"><?php echo $row['nama_fak']?></option>
                <?php endforeach;?>
          </select>
      </div>
      <div class="form-group has-feedback">
          <select class="form-control" name="jurusan" id="jurusan">
              <option value="">Pilih Jurusan</option>
          </select>
      </div>
        <div class="form-group has-feedback">
            <select class="form-control" name="bidangilmu" id="bidangilmu">
                <option value="">Pilih Bidang keilmuan</option>
            </select>
        </div>
        <div class="form-group has-feedback">
          <select class="form-control" name="jabatan">
              <option value="0">Pilih Jabatan</option>
              <option value="1">Asisten Ahli</option>
              <option value="2">Lektor</option>
              <option value="3">Lektor Kepala</option>
              <option value="4">Profesor</option>
            </select>
        </div>
      <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Retype password" name="password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <a href="<?php echo base_url('login') ?>" class="btn btn-info btn-flat">Login</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script>
    $(function(){
        $('#fakultas').change(function(){
          var fakultas = $('#fakultas').val();
          $.ajax({
            url: '<?php echo base_url('login/getBidang') ?>',
            type:'GET',
            data: 'bidang='+fakultas,
            dataType: 'json',
            success: function(data){
              var bidang = `<select id="bidangilmu" name="bidangilmu">
          <option value="">Pilih Bidang Ilmu</option>`;
          for (var i = 0; i < data.length; i++) {
            bidang+='<option value="'+data[i].idbidang+'">'+data[i].nama_bidang+'</option>';
          }
          bidang+='</select>';
          $('#bidangilmu').html(bidang);
            }
          });
        });
    });
</script>
<script>
    $(function(){
        $('#fakultas').change(function(){
          var fakultas = $('#fakultas').val();
          $.ajax({
            url: '<?php echo base_url('login/getJurusan') ?>',
            type:'GET',
            data: 'bidang='+fakultas,
            dataType: 'json',
            success: function(data){
              var bidang = `<select id="jurusan" name="jurusan">
          <option value="">Pilih Jurusan</option>`;
          for (var i = 0; i < data.length; i++) {
            bidang+='<option value="'+data[i].id_jur+'">'+data[i].nama_jur+'</option>';
          }
          bidang+='</select>';
          $('#jurusan').html(bidang);
            }
          });
        });
    });
</script>
<script type="text/javascript">
  <?php if ($this->session->flashdata('sukses')): ?>
  $('.alert-success').html('<?php echo $this->session->flashdata('sukses'); ?>').fadeIn();
  <?php endif; ?>
</script>
</body>
</html>
