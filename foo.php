<?php


$a = 3;
if(isset($a))
{
    echo $a . '<br>';
} else {
    echo "Varible is not set.";
}
$b = $a += 21;
echo $b . '<br>';
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
?>
