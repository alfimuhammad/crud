<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Pegawai</h3>
      <form method="POST" id="form-update-pegawai">
        <input type="hidden" name="id" value="<?php echo $dataPegawai->id_pegawai; ?>" >
        <div class="form-group">
          <label class="control-label" for="date">NPP :</label>
          <input type="text" class="form-control" placeholder="NPP" name="NPP" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->npp; ?>" readonly>
        </div>
        <div class="form-group">
          <label class="control-label" for="date">NIK :</label>
          <input type="text" class="form-control" placeholder="NIK" name="NIK" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->NIK; ?>" readonly>
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Nama :</label>
          <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->nama; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Tanggal Lahir:</label>
          <input class="form-control" id="date" name="tanggal_lahir" placeholder="YYYY/MM/DD" type="text" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->tanggal_lahir; ?>"/>
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Unit Kerja :</label>
          <select name="posisi" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
            <?php
            foreach ($dataPosisi as $posisi) {
              ?>
              <option value="<?php echo $posisi->id; ?>" <?php if($posisi->id == $dataPegawai->id_posisi){echo "selected='selected'";} ?>><?php echo $posisi->nama; ?></option>
              <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Jabatan Induk Perusahaan :</label>
          <input type="text" class="form-control" placeholder="Jabatan pada Induk Perusahaan" name="jabatan_jm" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->jabatan_jm; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Grade :</label>
          <input type="text" class="form-control" placeholder="Grade" name="grade" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->grade; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Jabatan
          PT NKJ :</label>
          <select name="jabatan" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
            <?php
            foreach ($dataJabatan as $jabatan) {
              ?>
              <option value="<?php echo $jabatan->nama; ?>" <?php if($jabatan->id == $dataPegawai->id_jabatan){echo "selected='selected'";} ?>><?php echo $jabatan->nama; ?></option>
              <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Status Karyawan
           :</label>
          <select name="status" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
            <?php
            foreach ($dataStatus as $status) {
              ?>
              <option value="<?php echo $status->id_status; ?>" <?php if($status->id_status == $dataPegawai->id_status){echo "selected='selected'";} ?>><?php echo $status->status; ?></option>
              <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Kelompok Jabatan :</label>
          <input type="text" class="form-control" placeholder="Kelompok Jabatan" name="kel_jab" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->kelompok_jabatan; ?>">
        </div>
         <div class="input-group form-group" style="display: inline-block;">
          <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-tag"></i>
          </span>
          <span class="input-group-addon">
              <input type="radio" name="jk" value="1" id="laki" class="minimal" <?php if($dataPegawai->id_kelamin == 1){echo "checked='checked'";} ?>>
          <label for="laki">Laki-laki</label>
            </span>
            <span class="input-group-addon">
              <input type="radio" name="jk" value="2" id="perempuan" class="minimal" <?php if($dataPegawai->id_kelamin == 2){echo "checked='checked'";} ?>> 
          <label for="perempuan">Perempuan</label>
            </span>
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Tanggal Kerja:</label>
          <input class="form-control" id="date" name="tanggal_kerja" placeholder="YYYY/MM/DD" type="text" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->tanggal_kerja; ?>"/>
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Tanggal Pensiun:</label>
          <input class="form-control" id="date" name="tanggal_pensiun" placeholder="YYYY/MM/DD" type="text" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->tanggal_pensiun; ?>"/>
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Pendidikan Diakui :</label>
          <input type="text" class="form-control" placeholder="Pendidikan Diakui" name="pend_diakui" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->pend_diakui; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Jurusan Pendidikan :</label>
          <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->jurusan; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Agama :</label>
          <input type="text" class="form-control" placeholder="Agama" name="agama" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->agama; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">No Rekening :</label>
          <input type="text" class="form-control" placeholder="Nomor Rekening" name="no_rek" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->no_rek; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Nama Bank :</label>
          <input type="text" class="form-control" placeholder="Nama Bank" name="bank" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->nama_bank; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">No NPWP :</label>
          <input type="text" class="form-control" placeholder="Nomor NPWP" name="npwp" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->npwp; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">BPJS Ketenagakerjaan :</label>
          <input type="text" class="form-control" placeholder="Nomor Telepon" name="bpjs_tk" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->bpjs_tk; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">BPJS Kesehatan :</label>
          <input type="text" class="form-control" placeholder="Nomor Telepon" name="bpjs_kes" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->bpjs_kes; ?>">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Telp :</label>
          <input type="text" class="form-control" placeholder="Nomor Telepon" name="telp" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->telp; ?>">
        </div>        
        <div class="form-group">
          <label class="control-label" for="date">Kota :</label>
          <select name="kota" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
            <?php
            foreach ($dataKota as $kota) {
              ?>
              <option value="<?php echo $kota->id; ?>" <?php if($kota->id == $dataPegawai->id_kota){echo "selected='selected'";} ?>><?php echo $kota->nama; ?></option>
              <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
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