<?php session_start();
function selisih($jadwal,$absen){
  $start = strtotime($jadwal);
  $end = strtotime($absen);
  $menit = floor((($end - $start)%3600) / 60)." menit ";
  $jam = floor(($end - $start)/3600)." jam ";
  $detik = ((($end - $start)%3600) % 60)." detik ";
  return $jam.$menit.$detik;
}
if(empty($connection)){
  header('location:../../');
} else {
  include_once 'mod/sw-panel.php';
 
echo'
  <div class="content-wrapper">';
switch(@$_GET['op']){ 
  default:
echo'
<section class="content-header">
  <h1>Data<small> Presensi Pegawai </small></h1>
    <ol class="breadcrumb">
      <li><a href="./"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">Data Absensi</li>
    </ol>
</section>';
echo'
<section class="content">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="padding:5px;">
      <div class="box box-solid">
        <div class="box-header with-border"  style="padding:10px;">
          <h3 class="box-title"><b>Presensi Pegawai Telat</b></h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table id="swdatatable" class="table table-bordered">
            <thead class="bg-primary">
            <tr>
              <th style="width: 10px">No</th>
              <th>Nama Pegawai</th>
              <th>Tanggal</th>
              <th>Waktu Telat</th>
            </tr>
            </thead>
            <tbody>';
            $query="SELECT employees.*,position.position_name,shift.shift_name,building.name,presence.presence_date,presence.time_in, shift.time_in as shift_in  FROM employees,position,shift,building,presence WHERE employees.position_id=position.position_id AND employees.shift_id=shift.shift_id AND employees.building_id=building.building_id AND employees.id=presence.employees_id AND presence.time_in>shift.time_in  order by employees.id DESC";
            $result = $connection->query($query);
            if($result->num_rows > 0){
            $no=0;
           while ($row= $result->fetch_assoc()) {
              $no++;
              echo'
              <tr>
                <td class="text-center">'.$no.'</td>
                <td>'.$row['employees_name'].'</td>
                <td>'.$row['presence_date'].'</td>
                <td>'.selisih($row['shift_in'],$row['time_in']).'</td>
              </tr>';}}
            echo'
            </tbody>
          </table>
          </div>
        </div>
    </div>
  </div> 
</section>
';
echo'
<section class="content">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <div class="box box-solid">
        <div class="box-header with-border" style="padding:10px;">
          <h3 class="box-title"><b> Pegawai Tidak Hadir</b></h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table id="swdatatable" class="table table-bordered">
            <thead class="bg-warning">
            <tr>
              <th style="width: 10px">No</th>
              <th>Nama Pegawai</th>
              <th>Tanggal</th>
              <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>';
            $query="SELECT employees.*,position.position_name,shift.shift_name,building.name,presence.presence_date,presence.time_in, present_status.present_id, present_status.present_name, shift.time_in as shift_in  FROM employees,position,shift,building,presence,present_status WHERE employees.position_id=position.position_id AND employees.shift_id=shift.shift_id AND employees.building_id=building.building_id AND employees.id=presence.employees_id AND present_status.present_id=presence.present_id AND presence.present_id !='1' order by employees.id DESC";
            $result = $connection->query($query);
            if($result->num_rows > 0){
            $no=0;
           while ($row= $result->fetch_assoc()) {
              $no++;
              echo'
              <tr>
                <td class="text-center">'.$no.'</td>
                <td>'.$row['employees_name'].'</td>
                <td>'.$row['presence_date'].'</td>
                <td>'.$row['present_name'].'</td>
              </tr>';}}
            echo'
            </tbody>
          </table>
          </div>
        </div>
    </div>
  </div> 
</section>
';
break;

}?>

</div>
<?php }?>