<?php
// class abstrak (abstract class) didefenisikan sebagai class yang tidak bisa diinstansiasi menjadi object.
// Sebuah class abstrak setidaknya memiliki satu method abstrak (abstract method).
// Untuk menggunakan sebuah class abstrak, kita harus membuat class turunan dari class abstrak tersebut.

// Tujuan dari dibuat abstract class adalah agar setiap class turunan menggunakan method abstrak pada class induk secara fleksibel.
// Jadi pada method abstrak di class induk hanya terdapat signature saja tanpa isi yang konkrit.

abstract class Hewan {
    abstract public function Makan();
    abstract public function Bergerak();
    abstract public function Beranak();
}

class Burung extends Hewan {
    public function Makan() {
        return "Burung makan biji-bijian<br />";
    }

    public function Bergerak() {
        return "Burung bergerak dengan berjalan, terbang dan melompat<br />";
    }

    public function Beranak() {
        return "Burung Beranak dengan bertelur<br />";
    }
}

class Kambing extends Hewan {
    public function Makan() {
        return "Kambing makan rumput<br />";
    }

    public function Bergerak() {
        return "Kambing bergerak dengan berjalan dan berlari<br />";
    }

    public function Beranak() {
        return "Kambing Beranak dengan melahirkan<br />";
    }
}

$Burung = new Burung;
$Kambing = new Kambing;

echo "<b>Perilaku Burung : </b><br />";
echo $Burung->Makan()."<br />";
echo $Burung->Bergerak()."<br />";
echo $Burung->Beranak()."<br />";

echo "<br />";
echo "<b>Perilaku Kambing : </b><br />";
echo $Kambing->Makan()."<br />";
echo $Kambing->Bergerak()."<br />";
echo $Kambing->Beranak()."<br />";
?>