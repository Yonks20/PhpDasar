<?php

// Pengulangan
// For
// While
// do While
// Foreach (khusus array)

for ($i = 0; $i < 5; $i++) {
    echo "Hello World! <br />";
}

// Nilai awal - Terminasi - increment decrement 

$i = 0;

while ($i<5) {
echo "Hello World! <br />";
$i++;
}


// do while, dikerjakan minimal sekali jika false

$i = 10;
do {
    echo "Hello World! <br />";
    $i++;
} while ($i < 5);
?>