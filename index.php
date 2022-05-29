<?php

//Summan med en for loop:

    $summan2 =0;

    for ($tal2 =0; $tal2 <= 100; $tal2++)
    {
    $summan2 += $tal2;
    }

echo "Summan med for loop blir: " . $summan2 . "<br>";



//Summan med en whileeee loop:
$tal =0;
$summan = 0;

while ($tal <= 100)
{
$summan += $tal;
$tal++;
}

echo "Summan med while loop: " . $summan ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>