<?php
   echo "Susunan Awal : <br>";
   echo "larine, aduh, qifuat, toda, anevi, samid, kifuat <br>";
   echo "<br> Susunan Final : <br>";
   $nama = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
   sort($nama);
   for ($j=0; $j<=6; $j++){
       echo $nama[$j].", ";
   }
?>