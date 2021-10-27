<?php

// jika nilai di atas 90 = A
// jika nilai di atas 80 = B
// jika nilai di atas 70 = C
// selain itu = D

$nilai = 95;

if ($nilai > 90) {
    echo "A";
}
else if ($nilai > 80) {
    echo "B";
}
else if ($nilai > 87) {
    echo "C";
} else {
    echo "D";
}