<?php
class manusia{
    public $nama_saya;
    function berinama($saya){
        $this->nama_saya=$saya;
    }
}
class teman extends manusia{
    public $nama_teman;
    function berinamateman($teman){
        $this->nama_teman=$teman;
    }
}
$objectteman = new teman;
$objectteman ->berinama("Dika");
$objectteman ->berinamateman("Andra");

echo "Nama Saya : ". $objectteman->nama_saya . "<br/>";
echo "Nama Teman Saya : ". $objectteman->nama_teman;
?>