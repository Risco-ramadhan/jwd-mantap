<form method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">nama</label>
        <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan data" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">alamat</label>
        <input name="alamat" type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan data" required>
    </div>
    <input value="submit" name="dataMhs" class="btn btn-primary" type="submit"></input>
</form>

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vsga1/perhitungan/kelolaData.php';

if (isset($_POST['dataMhs'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $arrdata = array(
        'id' => rand(1, 1009),
        'nama'     => $nama,
        'alamat'  => $alamat
    );

    $ini = addData($arrdata);
?>
    <h2>Data Berhasil Ditambahkan</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>

            <tr>

                <td> <?= $nama ?></td>
                <td> <?= $alamat ?></td>
                <td> ini aksi</td>
            </tr>
        </tbody>
    </table>


<?php

}
?>