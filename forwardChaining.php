<?php

session_start();

function rules_tetelo($rule1, $rule2, $rule3, $rules4, $rule5, $rule6, $rule7)
{
    if ($rule1 == 1 && $rule2 == 1 && $rule3 == 1 && $rules4 == 1 && $rule5 == 1 && $rule6 == 1 && $rule7 == 1) {
        $keputusan = 'TERDETEKSI';
    } else {
        $keputusan = 'Tidak Terdeteksi';
    }
    return $keputusan;
}
function rules_gumboro($rule1, $rule2, $rule3, $rule4, $rule5, $rule6, $rule7)
{
    if ($rule1 == 1 && $rule2 == 1 && $rule3 == 1 && $rule4 == 1 && $rule5 == 1 && $rule6 == 1 && $rule7 == 1) {
        $keputusan = 'TERDETEKSI';
    } else {
        $keputusan = 'Tidak Terdeteksi';
    }
    return $keputusan;
}
function rules_cacingan($rule1, $rule2, $rule3, $rule4, $rule5, $rule6)
{
    if ($rule1 == 1 && $rule2 == 1 && $rule3 == 1 && $rule4 == 1 && $rule5 == 1 && $rule6 == 1) {
        $keputusan = 'TERDETEKSI';
    } else {
        $keputusan = 'Tidak Terdeteksi';
    }
    return $keputusan;
}
function rules_berak_kapur($rule1, $rule2, $rule3, $rule4, $rule5)
{
    if ($rule1 == 1 && $rule2 == 1 && $rule3 == 1 && $rule4 == 1 && $rule5) {
        $keputusan = 'TERDETEKSI';
    } else {
        $keputusan = 'Tidak Terdeteksi';
    }
    return $keputusan;
}
function rules_snot($rule1, $rule2, $rule3, $rule4, $rule5, $rule6, $rule7, $rule8)
{
    if ($rule1 == 1 && $rule2 == 1 && $rule3 == 1 && $rule4 == 1 && $rule5 == 1 && $rule6 == 1 && $rule7 == 1 && $rule8 == 1) {
        $keputusan = 'TERDETEKSI';
    } else {
        $keputusan = 'Tidak Terdeteksi';
    }
    return $keputusan;
}

if (isset($_POST['hitung'])) {
    $KodeKonsultasi = $_POST['KodeKonsultasi'];
    $Gejala1 = $_POST['Gejala1'];
    $Gejala2 = $_POST['Gejala2'];
    $Gejala3 = $_POST['Gejala3'];
    $Gejala4 = $_POST['Gejala4'];
    $Gejala5 = $_POST['Gejala5'];
    $Gejala6 = $_POST['Gejala6'];
    $Gejala7 = $_POST['Gejala7'];
    $Gejala8 = $_POST['Gejala8'];
    $Gejala9 = $_POST['Gejala9'];
    $Gejala10 = $_POST['Gejala10'];
    $Gejala11 = $_POST['Gejala11'];
    $Gejala12 = $_POST['Gejala12'];
    $Gejala13 = $_POST['Gejala13'];
    $Gejala14 = $_POST['Gejala14'];
    $Gejala15 = $_POST['Gejala15'];
    $Gejala16 = $_POST['Gejala16'];
    $Gejala17 = $_POST['Gejala17'];
    $Gejala18 = $_POST['Gejala18'];
    $Gejala19 = $_POST['Gejala19'];
    $Gejala20 = $_POST['Gejala20'];
    $Gejala21 = $_POST['Gejala21'];
    $Gejala22 = $_POST['Gejala22'];
    $Gejala23 = $_POST['Gejala23'];
    $Gejala24 = $_POST['Gejala24'];


    $Keputusan_tetelo = rules_tetelo($Gejala1, $Gejala2, $Gejala3, $Gejala4, $Gejala5, $Gejala6, $Gejala7);
    $Keputusan_gumboro = rules_gumboro($Gejala1, $Gejala2, $Gejala8, $Gejala9, $Gejala10, $Gejala11, $Gejala12);
    $Keputusan_cacingan = rules_cacingan($Gejala1, $Gejala2, $Gejala13, $Gejala14, $Gejala15, $Gejala16);
    $Keputusan_berak_kapur = rules_berak_kapur($Gejala1, $Gejala2, $Gejala17, $Gejala18, $Gejala19);
    $Keputusan_snot = rules_snot($Gejala1, $Gejala2, $Gejala13, $Gejala20, $Gejala21, $Gejala22, $Gejala23, $Gejala24);

    $_SESSION['table'][] = ['kode_konsultasi' => $KodeKonsultasi, 'Keputusan_tetelo' => $Keputusan_tetelo, 'Keputusan_gumboro' => $Keputusan_gumboro, 'Keputusan_cacingan' => $Keputusan_cacingan, 'Keputusan_berak_kapur' => $Keputusan_berak_kapur, 'Keputusan_snot' => $Keputusan_snot];
}

if (isset($_POST['hapus'])) {
    session_destroy();
    header('Location: forwardChaining.php');
}

?>

<?php include 'blade/nav.php'; ?>
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header text-center text-info">
            <h3>Sistem Pakar Diagnosa Penyakit Ayam Dengan Menggunakan Metode Forward Chaining</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 shadow py-3">
                    <p class="text-center">Pilih Gejala Berikut !!</p>
                    <form method="post">
                        <table>
                            <tr>
                                <td>Kode Konsultasi</td>
                                <td> : </td>
                                <td><input type="text" name="KodeKonsultasi" class="form-control" placeholder="Inputkan Kode Konsultasi" required></td>
                            </tr>
                            <tr>
                                <td>Terlihat Lesu (G001)</td>
                                <td> : </td>
                                <td><select name="Gejala1" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nafsu Makan Berkurang (G002)</td>
                                <td> : </td>
                                <td><select name="Gejala2" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Ganguan Saluran Pernafasan (G003)</td>
                                <td> : </td>
                                <td><select name="Gejala3" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Mulut Berlendir (G004)</td>
                                <td> : </td>
                                <td><select name="Gejala4" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenger dan Kepala Kebiru-biruan (G005)</td>
                                <td> : </td>
                                <td><select name="Gejala5" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Kelumpuhan (G006)</td>
                                <td> : </td>
                                <td><select name="Gejala6" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Kejang-Kejang Hingga Kepala Terputar Kebelakang (G007)</td>
                                <td> : </td>
                                <td><select name="Gejala7" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Bulu Kusam (G008)</td>
                                <td> : </td>
                                <td><select name="Gejala8" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Diare Berlendir (G009)</td>
                                <td> : </td>
                                <td><select name="Gejala9" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Terjadi Iritasi (G010)</td>
                                <td> : </td>
                                <td><select name="Gejala10" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Gemetar (G011)</td>
                                <td> : </td>
                                <td><select name="Gejala11" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Peradangan Pada Dubur (G012)</td>
                                <td> : </td>
                                <td><select name="Gejala12" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Pertumbuhan Terhambat (G013)</td>
                                <td> : </td>
                                <td><select name="Gejala13" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tubuh Menjadi Kurus (G014)</td>
                                <td> : </td>
                                <td><select name="Gejala14" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Bulu Tampak Kusam (G015)</td>
                                <td> : </td>
                                <td><select name="Gejala15" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Kotoran Encer Berlendir Putih Kadang Berdarah (G016)</td>
                                <td> : </td>
                                <td><select name="Gejala16" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Mata Menutup (G017)</td>
                                <td> : </td>
                                <td><select name="Gejala17" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Kedinginan dan Bergerombol Mencari Tempat Hangat (G018)</td>
                                <td> : </td>
                                <td><select name="Gejala18" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Kotoran Encer yang Bercampur dengan Butiran Seperti Kapur (G019)</td>
                                <td> : </td>
                                <td><select name="Gejala19" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Keluar Lendir Kuning dari Hidung (G020)</td>
                                <td> : </td>
                                <td><select name="Gejala20" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Keluar Cairan dari Mata (G021)</td>
                                <td> : </td>
                                <td><select name="Gejala21" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Pembengkakan Antara Mata dan Hidung (G022)</td>
                                <td> : </td>
                                <td><select name="Gejala22" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Pilek / Susah Bernafas (G023)</td>
                                <td> : </td>
                                <td><select name="Gejala23" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Kerak Dalam Hidung (G024)</td>
                                <td> : </td>
                                <td><select name="Gejala24" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td><button type="submit" name="hitung" class="btn btn-success">Hitung</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col-lg-2"></div>

                <?php if (!empty($_SESSION)) { ?>
                    <div class="col-lg-12 shadow py-3">
                        <table class="table table-sm">
                            <thead>
                                <th>No</th>
                                <th>Kode Konsultasi</th>
                                <th>Hasil Tetelo</th>
                                <th>Hasil Gumboro</th>
                                <th>Hasil Cacingan</th>
                                <th>Hasil Berak Kapur</th>
                                <th>Hasil Snot</th>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($_SESSION['table'] as $key) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $key['kode_konsultasi']; ?></td>
                                        <td><?= $key['Keputusan_tetelo']; ?></td>
                                        <td><?= $key['Keputusan_gumboro']; ?></td>
                                        <td><?= $key['Keputusan_cacingan']; ?></td>
                                        <td><?= $key['Keputusan_berak_kapur']; ?></td>
                                        <td><?= $key['Keputusan_snot']; ?></td>
                                    <?php }  ?>
                            </tbody>
                        </table>
                        <form method="post">
                            <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</body>

</html>