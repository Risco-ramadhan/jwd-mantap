<?php

require $_SERVER['DOCUMENT_ROOT'] . '/vsga1/perhitungan/kelolaData.php';
$coba = getData();

// var_dump($coba);
// die;

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 0;
    foreach ($coba as $x) {
      $no++;

    ?>
      <tr>
        <td>
          <?= $no ?>
        </td>
        <td> <?= $x['nama']; ?></td>
        <td> <?= $x['alamat']; ?></td>
        <td> ini aksi</td>
      </tr>

    <?php
    }
    ?>
  </tbody>
</table>


<a class="btn btn-primary" href="index.php?page=tambah">Tambah</a>
<a class="btn btn-primary" href="index.php?page=cetak">Cetak</a>