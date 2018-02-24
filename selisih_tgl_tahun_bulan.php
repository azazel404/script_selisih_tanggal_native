<?php
    function tanggal($tgl1,$tgl2){
        $test =strtotime($tgl1 );
        $test2 = strtotime ($tgl2 );
        
        $selisih_tgl =abs($test2 - $test);
        
        $hari = 24*60*60;
        $bulan = 30*24*60*60;
        $tahun = 365*24*60*60;

     $selisih["year"] = floor($selisih_tgl / $tahun );
     
     $selisih["month"] = floor(($selisih_tgl - ($selisih["year"] * $tahun ))/$bulan);
     
     $selisih["day"] = floor($selisih_tgl -($selisih["year"] * $tahun)- ($selisih["month"] * $bulan )/$hari);
     
     return $selisih;
          
    }

$hasil = tanggal("12-12-2017","15-05-2018");

echo "Selisih tanggal adalah = 
{$hasil["year"]} tahun,  {$hasil["month"]} bulan, 
{$hasil["day"]} hari"; 
?>