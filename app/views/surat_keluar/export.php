<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=surat_keluar.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Jenis Surat</th>
      <th>Tanggal</th>
      <th>Nomor</th>
      <th>Asal</th>
      <th>Perihal</th>
      <th>Tujuan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $nomor = 1;
    foreach ($data['surat_keluar'] as $sk) {
    ?>
      <tr>
        <td><?= $nomor ?></td>
        <td><?= $sk->nama_jenis ?></td>
        <td><?= dateID($sk->tanggal) ?></td>
        <td><?= $sk->nomor ?></td>
        <td><?= $sk->asal ?></td>
        <td><?= $sk->perihal; ?></td>
        <td><?= $sk->tujuan ?></td>
      </tr>
    <?php
      $nomor++;
    }
    ?>
  </tbody>
</table>