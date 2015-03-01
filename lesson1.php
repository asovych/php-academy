<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <title>Lesson 1</title>
</head>
<body>
<form action="lesson1.php" method='POST'>
    <?php

    if (isset($_REQUEST['C'])) {
        $a=$_REQUEST['A'];;
        $b=$_REQUEST['B'];
        $c=$_REQUEST['C'];

        echo "A=$a<br/>B=$b<br/>C=$c<br/><br/><b>";

        if($c<min($a,$b)) echo "C is minimum value";
        elseif($c>max($a,$b)) echo "C is maximum value";
        elseif ($c==$a && $c==$b) echo "C is equal to A and B";
        elseif ($c==$a) echo "C is equal to A";
        elseif ($c==$b) echo "C is equal to B";
        else echo "C is between A and B";

        echo "</b><br/><br/>";
    }
    else {
        $a=5;
        $b=10;
        $c="";
    }

    echo "A = <input type='text' name='A' value='$a'><br/><br/>";
    echo "B = <input type='text' name='B' value='$b'><br/><br/>";
    echo "C = <input type='text' name='C' value='$c'><br/><br/>";


    ?>
    <input type="submit" value="Submit">
</form>
</body>
</html>
