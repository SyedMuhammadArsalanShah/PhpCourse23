<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Aptech gulshan 2</h1>

    <script></script>



    <?php

    echo "<h1>Bismillah</h1>";

    $first = 12;
    $second = 10;


    $add = $first + $second;
    $sub = $first - $second;
    $mul = $first * $second;
    $div = $first / $second;





    echo "<h1> My Values </h1>";

    echo $first . "<br>";
    echo $second . "<br>";









    echo $add . "<br>";
    echo $sub . "<br>";
    echo $mul . "<br>";
    echo $div . "<br>";



    echo "<h1> Assignment operators</h1>";





    $num = 100;
    $value = $num;



    echo "Defaul value " . $value . "<br>";
    $value += 10;

    // value = value+10;
    echo "addition" . $value;


    $value -= 10;

    // value = value+10;
    echo "subtraction" . $value;


    $value /= 10;

    // value = value+10;
    echo "division" . $value;

    $value *= 10;

    // value = value+10;
    echo "multiplication" . $value;







    echo "<h1> coomparsion operators</h1>";







    // ==  , != , >, <, >=,<=

    echo "1==7" . var_dump(1 == 7) . "<br>";
    echo "1!=7" . var_dump(1 != 7) . "<br>";
    echo "1>=7" . var_dump(1 >= 7) . "<br>";
    echo "1<=7" . var_dump(1 <= 7) . "<br>";






    $numval = 100;


    //   echo $numval++."<br>";

    // echo $numval;



    echo ++$numval . "<br>";

    echo $numval;





    echo "<h1> logical operator </h1>";


    $value = (true xor true);

    echo var_dump($value);








    $misbah = "!";



    if ($misbah > 0) {



        echo "its a positive number " . $misbah;
    } else if ($misbah < 0) {

        echo "its a negative number " . $misbah;
    } else {

        echo "not a number ";
    }












    echo "<h1>   array </h1>";






    $students = array("Sana ", "Abdul Rehamn", "Misbah sheikh ", "Laiba", "Hamna", "Fatimah");

    echo $students[1] . "<br>";


    echo count($students);






    for ($i = 0; $i < 10; $i++) {

        echo " Ab main chutti nahi karonga Yahya Nisar" . "<br>";
    }




    $a = 1;


    while ($a <= 10) {

        echo " Ab main chutti nahi karonga Yahya Nisar by while loop" . $a . "<br>";

        $a++;
    }








    do {
        echo "Sana kabhi nahi sahi hony wali " . "<br>";
    } while ($a <= 10);








    function   khuzaima()
    {


        echo "jaldi aty hain X ";
    }






    khuzaima();



    define("sana", "Graphic Designer Web Designer");
    define("PI", 3.14);



    echo "
        <p>
        Lorem ipsum dolor sit " . sana . " amet consectetur adipisicing elit
        Fuga sint repellat quam dolores ea rerum ullam laboriosam amet corporis?
        Quas est et culpa odit, ut dolorum hic suscipit consequatur animi?
        </p>";


    echo sana;
    echo PI;


    echo "demo \n php";




    ?>




<script>


   console.log("abdul rehman \n karachi");


</script>




</body>

</html>