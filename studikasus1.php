<?php
class KalkulatorSuhu {
    // method konversi dari Celcius ke Fahrenheit
    function celciusKeFahrenheit($c) {
        return ($c * 9/5) + 32;
    }

    // method konversi dari Celcius ke Kelvin
    function celciusKeKelvin($c) {
        return $c + 273.15;
    }

    // method konversi dari Fahrenheit ke Celcius
    function fahrenheitKeCelcius($f) {
        return ($f - 32) * 5/9;
    }

    // method konversi dari Kelvin ke Celcius
    function kelvinKeCelcius($k) {
        return $k - 273.15;
    }
}

// contoh penggunaan
$kalkulator = new KalkulatorSuhu();

$celcius = 25;
echo "Suhu $celcius °C ke Fahrenheit = " . $kalkulator->celciusKeFahrenheit($celcius) . " °F<br>";
echo "Suhu $celcius °C ke Kelvin = " . $kalkulator->celciusKeKelvin($celcius) . " K<br>";

$fahrenheit = 77;
echo "Suhu $fahrenheit °F ke Celcius = " . $kalkulator->fahrenheitKeCelcius($fahrenheit) . " °C<br>";

$kelvin = 300;
echo "Suhu $kelvin K ke Celcius = " . $kalkulator->kelvinKeCelcius($kelvin) . " °C<br>";
?>