<div class="col-md-12 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-location-arrow"></i> List detail Pegawai (Nama: <b><?php echo $pegawai->nama; ?></b>)</h3>

  <div class="box box-body">
      <table class="table table-bordered table-striped">
        <tbody id="data-pegawai">
          <?php
            foreach ($dataPegawai as $pegawai) {
              ?>
              <tr>
                <td>Nama</td>
                <td><?php echo $pegawai->nama; ?></td>
              </tr>
              <tr>
                <td>Nomor Pokok Pegawai</td>
                <td><?php echo $pegawai->npp; ?></td>
              </tr>
              <tr>
                <td>Tanggal Bakti</td>
                <td><?php echo $pegawai->tanggal_kerja; ?></td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td><?php echo $pegawai->id_jabatan; ?></td>
              </tr>
              <tr>
                <td>Unit Kerja</td>
                <td><?php echo $pegawai->posisi; ?></td>
              </tr>
              <tr>
                <td>Grade</td>
                <td><?php echo $pegawai->grade; ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $pegawai->jeniskelamin; ?></td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td><?php echo $pegawai->tanggal_lahir; ?></td>
              </tr>
              <tr>
                <td>Agama</td>
                <td><?php echo $pegawai->agama; ?></td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
      </div>

        <div class="box box-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nama Sekolah</th>
            <th>Jurusan</th>
            <th>Tahun Lulus</th>
            <th>Nomor Ijazah</th>
          </tr>
        </thead>
        <tbody id="data-pendidikan">
          <?php
            foreach ($dataPendidikan as $pendidikan) {
              ?>
              <tr>
                <td style="min-width:230px;"><?php echo $pendidikan->nama; ?></td>
                <td><?php echo $pendidikan->jurusan; ?></td>
                <td><?php echo $pendidikan->lulus; ?></td>
                <td><?php echo $pendidikan->nomor; ?></td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
  </div>

  <div class="text-right">
    <button class="btn btn-danger" data-dismiss="modal"> Close</button>
  </div>
</div>