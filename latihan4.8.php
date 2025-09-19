<?php
class Perulangan{
    public function loop(){
        $array = array('Palembang', 'Batam', 'Bandar Lampung', 'Pekanbaru', 'Padang');
        foreach ($array as $key){
            echo $key . "<br/>";
        }
    }
}

$ObjekPerulangan = new Perulangan();
echo "Nama-Nama Kota di Pulau Sumatera : " . "<br />";
echo $ObjekPerulangan->loop() . "<br />";
?>