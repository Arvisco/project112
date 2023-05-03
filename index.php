<?php ob_start();
$hub = mysqli_connect('localhost', 'root', 'root', 'xxx');
$data = mysqli_query($hub, "SELECT * FROM xxx");

function total($table){ 
    global $hub;
$j1 = mysqli_query($hub, "SELECT SUM($table) FROM xxx");
$row = mysqli_fetch_array($j1);
$sum = $row[0];
return $sum;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Index</title>
</head>

<body>
    <div class="container-fluid table-responsive p-5">
        <h4 class="text-center fw-bold">DAFTAR PERINCIAN KOMPOSISI KEPEMILIKAN MODAL DISETOR
            PROVINSI, KABUPATEN DAN KOTA SE SULSELBAR & KOPERASI PT BANK SULSELBAR
            <br> PERIODE : 30 NOVEMBER 2022
        </h4>

        <table class="table table-bordered table-light text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">PEMPROV/PEMKAB </th>
                    <th>Hadir</th>
                    <th scope="col">MODAL DISETOR POSISI S/D RUPS 31 MARET 2022 & PERSETUJUAN OJK</th>
                    <th scope="col">Modal Disetor Yang Dibelum Disahkan RUPS & OJK Sampai dengan 30 November 2022</th>
                    <th>JUMLAH</th>
                    <th>KEPEMILIKAN( % )</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data as $key) {
                    $id = $key['id'];
                    

                ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $key['pemprov'] ?></td>
                        <td><button class="btn btn-sm btn-primary" onclick="toggleText<?php echo $id; ?>()">Hadir</button></td>
                        <td><?= number_format($key['modis'],0,'.',',')  ?></td>
                        <td><?= number_format($key['modiz']/ 100, 2, '.', ',') ?></td>
                        <td><?= number_format($key['jumlah']/ 100, 2, '.', ',') ?></td>
                        <td id="hiddenText<?= $id ?>" style="display:none"><a href="updater.php?id=<?= $id ?>&&isi=<?= $key['kepemilikan'] ?>" class="bg-transparent btn"><?= $key['kepemilikan'] ?>%</a></td>

                    </tr>
                    <script>
                        function toggleText<?php echo $id; ?>() {
                            var hiddenText = document.getElementById("hiddenText<?= $id ?>");
                            if (hiddenText.style.display === "none") {
                                hiddenText.style.display = "block";

                            } else {
                                hiddenText.style.display = "none";

                            }
                        }
                    </script>

                <?php }
                ob_flush(); ?>
                <tr>
                    <td></td>
                    <td><b>Jumlah</b></td>
                    <td></td>
                    <td><?= number_format(total("modis"),0,'.',',') ?></td>
                    <td><?= number_format(total("modiz")/ 100, 2, '.', ',') ?></td>
                    <td><?=number_format(total("jumlah")/ 100, 2, '.', ',') ?></td>
                    <td><?= round(total("kepemilikan")) ?>%</td>
                 



                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>