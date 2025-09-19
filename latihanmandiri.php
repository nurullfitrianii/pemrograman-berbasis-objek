<?php
class Segitiga {
    private $tinggi;

    public function __construct($tinggi) {
        $this->tinggi = $tinggi;
    }
    public function getTinggi() {
        return $this->tinggi;
    }
    public function cetakSegitiga1() {
        for ($i = 1; $i <= $this->tinggi; $i++) {
            // Spasi
            for ($j = 1; $j <= $this->tinggi - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            // Bintang
            for ($k = 1; $k <= (2 * $i) - 1; $k++) {
                echo "*&nbsp;";
            }
            echo "<br>";
        }
    }
    public function cetakSegitiga2() {
        for ($i = 1; $i <= $this->tinggi; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*&nbsp;";
            }
            echo "<br>";
        }
        for ($i = $this->tinggi - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*&nbsp;";
            }
            echo "<br>";
        }
    }
    public function cetakSegitiga3() {
        for ($i = 1; $i <= $this->tinggi; $i++) {
            // Spasi
            for ($j = 1; $j <= $this->tinggi - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            // Bintang
            for ($k = 1; $k <= $i; $k++) {
                echo "*&nbsp;";
            }
            echo "<br>";
        }
        for ($i = $this->tinggi - 1; $i >= 1; $i--) {
            // Spasi
            for ($j = 1; $j <= $this->tinggi - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            // Bintang
            for ($k = 1; $k <= $i; $k++) {
                echo "*&nbsp;";
            }
            echo "<br>";
        }
    }
}
$segitiga1 = new Segitiga(4);
$segitiga2 = new Segitiga(5);
$segitiga3 = new Segitiga(5);

echo "Segitiga 1:<br>";
$segitiga1->cetakSegitiga1();
echo "<br>";

echo "Segitiga 2:<br>";
$segitiga2->cetakSegitiga2();
echo "<br>";

echo "Segitiga 3:<br>";
$segitiga3->cetakSegitiga3();

?>