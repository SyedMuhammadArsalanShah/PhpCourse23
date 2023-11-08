<?php


// $page=readfile("info.txt");

// echo $page


// fopen();
$fileopen = fopen("info.txt", "r");


// echo (var_dump($fileopen));



if (!$fileopen) {
    die("data is failed  ");
}



// $content=fread($fileopen, filesize("info.txt"));

// echo $content;


// echo fgetc($fileopen);
// echo fgetc($fileopen);
// echo fgetc($fileopen);
// echo fgetc($fileopen);
// echo fgetc($fileopen);
// echo fgetc($fileopen);

// while ($a = fgetc($fileopen)) {
//     echo $a;
// }



echo fgets($fileopen);
