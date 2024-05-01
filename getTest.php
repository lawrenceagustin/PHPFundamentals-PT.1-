<?php
if(isset($_GET['getDiscriminant'])){

    $numA = $_GET['A'];
    $numB = $_GET['B'];
    $numC = $_GET['C'];

    $discriminant = pow($numB,2) - 4 * $numA * $numC;

    echo"<h2>The answer is ". $discriminant . "</h2>";

}
?>