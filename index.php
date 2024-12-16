<?php 

//comment (ctrl+/)
//output
echo "Hello World! <br>";

//variable
$number = 12;
echo "This is number: $number <br>";
$string = "Brother";
echo "$string <br>";
$boolean = true;
echo "$boolean";

//Arithmatic Operation
$result = 9 + 2;
echo "Add: $result <br>";
$result = 9 - 2;
echo "Min: $result <br>";
$result = 9 * 2;
echo "Mutiply: $result <br>";
$result = 9 / 2;
echo "Divide: $result <br>";
$result = 9 % 2;
echo "Modulus: $result <br>";
$result = 9 ** 2;
echo "Exponent: $result <br>";

//assignment operator
$result += 4;
echo "$result <br>";

//program even or odd
$input = 0;
if($input == 0){
    echo "This is 0";
}else if($input % 2 == 0){
    echo "This is even";
}else{
    echo "this is odd";
}

name();

echo "<br>";

//Logical Operation
//AND
//mengeluarkan true, jika kedua kondisi bernilai true
$age = 19;
$SIM = true;

if($age > 18 AND $SIM == true){
    echo "Lolos Razia <br>";
}else{
    echo "Kena tilang <br>";
}

//OR
//mengeluarkan true, cukup dengan salah satu kondisi bernilai true
if($age > 18 OR $SIM == true){
    echo "Lolos Razia <br>";
}else{
    echo "Kena tilang <br>";
}

//XOR
//mengeluarkan true, jika dan hanya jika salah satu kondisi bernilai true.
$pisau = false;
$gunting = false;
if($pisau == true XOR $gunting == true){
    echo "Lolos Razia <br>";
}else{
    echo "Kena tilang <br>";
}

$input = 6;
switch($input){
    case 1:
        echo "You have chosen 1";
        break;
    case 2:
        echo "You have chosen 2";
        break;
    case 3:
        echo "You have chosen 3";
        break;
    case 4:
        echo "You have chosen 4";
        break;
    default:
        echo "You should choose between 1 - 4";
        break;
}
name();

//Repetition
// while
$i = 0;

// while($i < 10){
//     echo "$i <br>";
//     $i += 1;
// }

// for($i = 1; $i < 10; $i++){
//     echo "$i <br>";
// }

// do{
//     echo "$i <br>";
//     $i += 1;
// }while($i < 10);

$array = [1, 2, 3, 4, 5];

echo "<br> $array[0] <br>";

foreach($array as $a){
    echo "$a <br>";
}

$mahasiswa = array(
    "nama" => "Reynard",
    "NIM" => 2702258812,
    "Age" => 19
);

// echo $mahasiswa["nama"];

name();

foreach($mahasiswa as $mhs => $mhs_data){
    echo "$mhs => $mhs_data <br>";
}

$random = rand(1, 10);
echo "$random <br>";

$string = "joiavioNION ion OIcnioNCiknIONCfioNifmjIPMFoLMVKNVoiniovN io";

$size = strlen($string);
echo "$size <br>";

$isEmpty = 2;
if(isset($isEmpty)){
    echo "This has value <br>";
}else{
    echo "This is null <br>";
}

if(empty($isEmpty)){
    echo "This is null <br>";
}else{
    echo "This has value <br>";
}
$num1 = 2;
$num2 = 2;
$result = add($num1, $num2);
echo "$result <br>";
function name(){
    echo "This is function <br>";
}

function add($num1, $num2){
    return $num1 + $num2;
}
?> 