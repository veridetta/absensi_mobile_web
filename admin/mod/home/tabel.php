<?php
//import koneksi ke database
?>
<html>
<head>
  <title>Stock Barang</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<?php
if(empty($connection)){
  header('location:../../');
} else {
  include_once 'mod/sw-panel.php';

  $query_employees ="SELECT id FROM employees";
  $result_count = $connection->query($query_employees);

  $query_position ="SELECT position_id FROM position";
  $result_count_position = $connection->query($query_position);

  $query_building ="SELECT building_id FROM building";
  $result_count_building = $connection->query($query_building);

  $query_shift ="SELECT shift_id FROM shift";
  $result_count_shift = $connection->query($query_shift);


echo'
<div class="content-wrapper">
<section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>'.$result_count->num_rows.'</h3>
              <p>Pengguna</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
              <a href="./karyawan" class="small-box-footer">
              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>'.$result_count_position->num_rows.'</h3>
              <p>Jabatan</p>
            </div>
            <div class="icon">
              <i class="fa fa fa-briefcase"></i>
            </div>
            <a href="./jabatan" class="small-box-footer">
             Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>'.$result_count_building->num_rows.'</h3>
              <p>Lokasi Kantor</p>
            </div>
            <div class="icon">
              <i class="fa fa-building"></i>
            </div>
            <a href="./lokasi" class="small-box-footer">
              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>'.$result_count_shift->num_rows.'</h3>
              <p>Shift Kerja</p>
            </div>
            <div class="icon">
              <i class="fa fa-retweet"></i>
            </div>
            <a href="./shift" class="small-box-footer">
              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
    
</section>
</div>';

$query = mysqli_query($connection, "SELECT * FROM presence ORDER BY presense.presence_id DESC");

?>

            <div class="content">
              <div class="container-fulid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="header">
                        <h4 class="title">Absensi Pegawai</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="content table=responsive table-full-width">
              <table class="table table-striped">
                <thead>
                  <th class="text-center">ID Absen</th>
                  <th class="text-center">ID Pegawai</th>
                  <th class="text-center">Tanggal Absen</th>
                  <th class="text-center">Jam Masuk</th>
                  <th class="text-center">Jam Keluar</th>
                  <th class="text-center">foto Masuk</th>
                  <th class="text-center">Foto Keluar</th>
                  <th class="text-center">Masuk/Pulang/Tidak Hadir</th>
                  <th class="text-center">Koordinat Absen</th>
                  <th class="text-center">Keterangan</th>
                </thead>
                <tbody style="height: 100vh;">
                  <?php if(mysqli_num_rows($query) {?>
                    <?php while(row = mysqli_fetch_array($query)) {?>
                  <tr>
                      <td class="text-center"><?php echo $row['presence_id']?></td>
                      <td class="text-center"><?php echo $row['employees_id'] ?></td>
                      <td class="text-center"><?php echo $row['pesence_date'] ?></td>
                      <td class="text-center"><?php echo $row['time_in'] ?></td>
                      <td class="text-center"><?php echo $row['time_out'] ?></td>
                      <td class="text-center"><?php echo $row['picture_in'] ?></td>
                      <td class="text-center"><?php echo $row['picture_out'] ?></td>
                      <td class="text-center"><?php echo $row['presenst_id'] ?></td>
                      <td class="text-center"><?php echo $row['presensce_address'] ?></td>
                      <td class="text-center"><?php echo $row['information'] ?></td>

                  </tr>
                  <?php } ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>
<?PHP
}?>


	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>