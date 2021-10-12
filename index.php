<h2>Count</h2>
<p>Retourne le nombre d’éléments dans un tableau.</p>

    <p>$colors=array("Blue","Orange","red");</p>
    <p>echo count($colors); // 3</p>
<?php
    $colors=array("Blue","Orange","red");
    echo count($colors); // 3
?>
<h2>Is_array</h2>
<p>Est utilisé pour déterminer si une variable est un tableau ou non.</p>

<p>$tab = array('X','Y','X');</p>
<p>if (is_array($tab))</p>
<p> echo "Ceci est un tableau....";</p>
<p>else</p>
<p>echo "Ceci n'est pas un tableau....";</p>
<?php
    $tab = array('X','Y','X');
    if (is_array($tab))
        echo "Ceci est un tableau....";
    else
        echo "Ceci n'est pas un tableau....";
?>

<h2>Substr</h2>
<p>Renvoie une partie d’une chaîne.</p>

<p>echo substr("Welcom to Function", 10);</p>
<?php
       echo substr("Welcom to Function", 10);
?>

<?php
$rest = substr("abcdef", 0, -1);  // retourne "abcde"
$rest = substr("abcdef", 2, -1);  // retourne "cde"
$rest = substr("abcdef", -3, -1); // retourne "de"
?>



