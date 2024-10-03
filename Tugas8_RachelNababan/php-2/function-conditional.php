<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";

function greetings($name) {
  echo "Halo $name, Selamat Datang di Sanbercode!<br>";
}

// Jalankan function
greetings("Bagas");
greetings("Wahyu");
greetings("nama peserta");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";

function reverseString($str) {
  $reversed = '';
  $length = strlen($str);
  
  // Loop untuk membalikkan string
  for ($i = $length - 1; $i >= 0; $i--) {
      $reversed .= $str[$i];
  }

  echo $reversed . "<br>";
}

// Jalankan function
reverseString("abdul");
reverseString("Sanbercode");
reverseString("We Are Sanbers Developers");

echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome($str) {
  $reversed = '';
  $length = strlen($str);
  
  // Membalikkan string menggunakan loop
  for ($i = $length - 1; $i >= 0; $i--) {
      $reversed .= $str[$i];
  }

  // Cek apakah string yang dibalik sama dengan string asli
  if ($reversed === $str) {
      echo "true<br>";
  } else {
      echo "false<br>";
  }
}

// Jalankan function
palindrome("civic");   // true
palindrome("nababan");  // true
palindrome("jambaban"); // false
palindrome("racecar");  // true

echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($nilai) {
  if ($nilai >= 85 && $nilai <= 100) {
      return "Sangat Baik<br>";
  } elseif ($nilai >= 70 && $nilai < 85) {
      return "Baik<br>";
  } elseif ($nilai >= 60 && $nilai < 70) {
      return "Cukup<br>";
  } else {
      return "Kurang<br>";
  }
}

// Jalankan function
echo tentukan_nilai(98); // Sangat Baik
echo tentukan_nilai(76); // Baik
echo tentukan_nilai(67); // Cukup
echo tentukan_nilai(43); // Kurang

?>

</body>

</html>