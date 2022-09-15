<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=daftar_users.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border="1">
  <thead>
    <tr>
      <th>Nama</th>
      <th>NIP</th>
      <th>Pangkat</th>
      <th>Username</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($data['users'] as $user) {
    ?>
      <tr>
        <td><?= $user->nama ?></td>
        <td><?= $user->nip ?></td>
        <td><?= $user->pangkat ?></td>
        <td><?= $user->username ?></td>
        <td><?= $user->email ?></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>