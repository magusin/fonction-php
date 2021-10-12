<?php include 'header.php'; ?>


    <h2>Count</h2>
    <p>Retourne le nombre d’éléments dans un tableau.</p>
    <div class="tableau">
    <table>
        <tbody>
            <tr>
                <th scope="row" class="select">1.</th>
                <td><span class="color-3"><</span><span class="color-3">?php</span></td>
            </tr>
            <tr>
                <th scope="row" class="select">2.</th>
                <td><span class="color-6">$colors</span><span class="color-2">=array</span><span class="color-4">(</span><span class="color-5">"Blue"</span><span class="color-1">,</span><span class="color-5">"Orange"</span><span class="color-1">,</span><span class="color-5">"red"</span><span class="color-4">)</span><span class="color-1">;</span></td>
            </tr>
            <tr>
                <th scope="row" class="select">3.</th>
                <td><span class="color-2">echo count</span><span class="color-4">(</span><span class="color-6">$colors</span><span class="color-4">)</span><span class="color-1">; </span><span class="color-7">// 3</span></td>
            </tr>
            <tr>
                <th scope="row" class="select">4.</th>
                <td class="color-3">?></td>
            </tr>
           
        </tbody>
    </table>
</div>

<?php
    $colors=array("Blue","Orange","red");
    echo "resultat : ".count($colors);
    // 3
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

<h2>In_array</h2>
<p>Recherche une valeur spécifique dans un tableau.</p>

<p>$colors = array("Blue", "Orange", "Red");</p>
<p>if (in_array("Red", $colors)) {</p>
<p>echo "Red was found";}</p>
<p>if (in_array("Green", $colors)) {</p>
<p>echo "Green was found";}</p>

<?php
    $colors = array("Blue", "Orange", "Red");
    if (in_array("Red", $colors)) {
        echo "Red was found";
    }
    if (in_array("Green", $colors)) {
        echo "Green was found";
    }
?>





