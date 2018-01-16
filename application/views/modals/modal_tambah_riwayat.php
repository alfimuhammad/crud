<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Riwayat</h3>
      <form method="POST" id="form-tambah-riwayat">
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
          <label class="control-label" for="date">Nama Sekolah :</label>
          <input type="text" class="form-control" placeholder="Nama Sekolah" name="nama" aria-describedby="sizing-addon2">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Jurusan :</label>
          <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" aria-describedby="sizing-addon2">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Tahun Ijazah :</label>
          <input type="text" class="form-control" placeholder="Tahun dikeluarkan Ijazah" name="lulus" aria-describedby="sizing-addon2">
        </div>
        <div class="form-group">
          <label class="control-label" for="date">Nomor Ijazah :</label>
          <input type="text" class="form-control" placeholder="Nomor Ijazah" name="nomor" aria-describedby="sizing-addon2">
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