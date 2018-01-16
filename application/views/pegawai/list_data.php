<?php
$no = 1;
  foreach ($dataPegawai as $pegawai) {
    ?>
    <tr>
    <td><?php echo $no; ?></td>
      <td style="min-width:230px;"><a class="detail-dataKota" href="#" data-id="<?php echo $pegawai->id; ?>"><?php echo $pegawai->NIK; ?></a></td>
      <td><?php echo $pegawai->pegawai; ?></td>
      <td><?php echo $pegawai->grade; ?></td>
      <td><?php echo $pegawai->id_jabatannkj; ?></td>
      <td><?php echo $pegawai->posisi; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $pegawai->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Detail</button>
        <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $pegawai->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        <button class="btn btn-warning tambah-dataRiwayat" data-id="<?php echo $pegawai->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Tambah Riwayat</button>
      </td>
    </tr>
    <?php
    $no++;
  }
?>