<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Riwayat Pendidikan</h3>

  <form id="form-update-kota" method="POST">
    <input type="hidden" name="id" value="<?php echo $dataPegawai->id_pegawai; ?>">
    <div class="input-group form-group">
      <label class="control-label" for="date">NPP :</label>
      <input type="text" class="form-control" placeholder="Nama" name="kota" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->npp; ?>">
    </div>
    <div class="form-group">
      <label class="control-label" for="date">NPP :</label>
      <input type="text" class="form-control" placeholder="NPP" name="NPP" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>
  </form>
</div>