<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Pegawai</h3>

  <form id="form-tambah-pegawai" method="POST">
    <div class="form-group">
      <label class="control-label" for="date">NPP :</label>
      <input type="text" class="form-control" placeholder="NPP" name="NPP" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">NIK :</label>
      <input type="text" class="form-control" placeholder="NIK" name="NIK" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Nama :</label>
      <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Tanggal Lahir :</label>
        <input class="form-control" id="date" name="tgllhr" placeholder="YYYY/MM/DD" type="text"/>
  </div>    
    <div class="form-group">
      <label class="control-label" for="date">Posisi :</label>
      <select name="posisi" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
        <?php
        foreach ($dataPosisi as $posisi) {
          ?>
          <option value="<?php echo $posisi->id; ?>">
            <?php echo $posisi->nama; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Jabatan Induk Perusahaan :</label>
      <input type="text" class="form-control" placeholder="Jabatan JM/WTR" name="jabasli" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Grade :</label>
      <input type="text" class="form-control" placeholder="Grade" name="grade" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Jabatan :</label>
      <select name="jabatan" class="form-control" aria-describedby="sizing-addon2">
        <?php
        foreach ($dataJabatan as $jabatan) {
          ?>
          <option value="<?php echo $jabatan->nama; ?>">
            <?php echo $jabatan->nama; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Status Karyawan :</label>
      <select name="status" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
        <?php
        foreach ($dataStatus as $status) {
          ?>
          <option value="<?php echo $status->id_status; ?>">
            <?php echo $status->status; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Kelompok Jabatan :</label>
      <select name="kel_jab" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
         <option value="Operasional">Operasional</option>
         <option value="Non Operasional">Non Operasional</option>
      </select>
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Jenis Kelamin :</label>
      <span class="input-group-addon">
          <input type="radio" name="jk" value="1" id="laki" class="minimal">
      <label for="laki">Laki-laki</label>
        </span>
        <span class="input-group-addon">
          <input type="radio" name="jk" value="2" id="perempuan" class="minimal"> 
      <label for="perempuan">Perempuan</label>
        </span>
    </div>
    <!-- TANGGAL -->
  <div class="form-group">
      <label class="control-label" for="date">Tanggal Kerja :</label>
        <input class="form-control" id="date" name="tglkrj" placeholder="YYYY/MM/DD" type="text"/>
  </div>  
  <div class="form-group">
      <label class="control-label" for="date">Tanggal Pensiun :</label>
        <input class="form-control" id="date" name="tglpensiun" placeholder="YYYY/MM/DD" type="text"/>
  </div>
  <div class="form-group">
      <label class="control-label" for="date">Pendidikan Diakui :</label>
      <input type="text" class="form-control" placeholder="Pendidikan" name="pend" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Jurusan Pendidikan :</label>
      <input type="text" class="form-control" placeholder="Jurusan" name="jrsn" aria-describedby="sizing-addon2">
    </div>  
    <div class="form-group">
      <label class="control-label" for="date">Agama :</label>
      <select name="agama" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
         <option value="Islam">Islam</option>
         <option value="Kristen">Kristen</option>
         <option value="Katolik">Katolik</option>
         <option value="Hindu">Hindu</option>
         <option value="Budha">Budha</option>
      </select>
    </div>
    <div cl
    <div class="form-group">
      <label class="control-label" for="date">No Rekening :</label>
      <input type="text" class="form-control" placeholder="Nomor Rekening" name="norek" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">Nama Bank :</label>
      <input type="text" class="form-control" placeholder="Nama Bank" name="bank" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">NPWP :</label>
      <input type="text" class="form-control" placeholder="NPWP" name="npwp" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">BPJS Ketenagakerjaan :</label>
      <input type="text" class="form-control" placeholder="No BPJS Ketenagakerjaan" name="bpjs_kt" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">BPJS Kesehatan :</label>
      <input type="text" class="form-control" placeholder="No BPJS Kesehatan" name="bpjs_kes" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">No. Telepon :</label>   
      <input type="text" class="form-control" placeholder="Nomor Telepon" name="telp" aria-describedby="sizing-addon2">
    </div>
    
    
    <div class="form-group">
      <label class="control-label" for="date">Lokasi Kantor :</label>
      <select name="kota" class="form-control" aria-describedby="sizing-addon2">
        <?php
        foreach ($dataKota as $kota) {
          ?>
          <option value="<?php echo $kota->id; ?>">
            <?php echo $kota->nama; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    
    
    </div>
    
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>
  </form>
</div>




<script>
    $(document).ready(function(){
      var date_input=$('input[id="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
<script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script>