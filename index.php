<?php include 'header.php'; ?>


    <h2>Count</h2>
    <p>Retourne le nombre d’éléments dans un tableau.</p>
    <div class="tableau">
    <table>
        <tbody>
            <tr>
                <th scope="row">1.</th>
                <td><span class="color-3"><</span><span class="color-3">?php</span></td>
            </tr>
            <tr>
                <th scope="row">2.</th>
                <td><span class="color-6">$colors</span><span class="color-2"><span class="color-1"> = </span>array</span><span class="color-4">(</span><span class="color-5">"Blue"</span><span class="color-1">,</span><span class="color-5">"Orange"</span><span class="color-1">,</span><span class="color-5">"red"</span><span class="color-4">)</span><span class="color-1">;</span></td>
            </tr>
            <tr>
                <th scope="row">3.</th>
                <td><span class="color-2">echo count</span><span class="color-4">(</span><span class="color-6">$colors</span><span class="color-4">)</span><span class="color-1">; </span><span class="color-7">// 3</span></td>
            </tr>
            <tr>
                <th scope="row">4.</th>
                <td class="color-3">?></td>
            </tr>
           
        </tbody>
    </table>
</div>

<?php
    $colors = array("Blue","Orange","red");
    echo "Résultat : ".count($colors);
    // 3
?>
<h2>Is_array</h2>
<p>Est utilisé pour déterminer si une variable est un tableau ou non.</p>

<div class="tableau">
    <table>
        <tbody>
            <tr>
                <th scope="row">1.</th>
                <td><span class="color-3"><</span><span class="color-3">?php</span></td>
            </tr>
            <tr>
                <th scope="row">2.</th>
                <td><span class="color-6">$tab</span><span class="color-1"> = </span><span class="color-2">array</span><span class="color-4">(</span><span class="color-5">"array"</span><span class="color-1">,</span><span class="color-9">126e7</span><span class="color-1">,</span><span class="color-8">[</span><span class="color-9">1</span><span class="color-1">,</span><span class="color-9">-152</span><span class="color-1">,</span><span class="color-5">"MAJ"</span><span class="color-8">]</span><span class="color-4">)</span><span class="color-1">;</span>
            </td>
            </tr>
            <tr>
                <th scope="row">3.</th>
                <td><span class="color-8">if </span><span class="color-4">(</span><span class="color-2">is_array</span><span class="color-8">(</span><span class="color-6">$tab</span><span class="color-8">)</span><span class="color-4">)</span></td>
            </tr>
            <tr>
                <th scope="row">4.</th>
                <td class="color-2">echo <span class="color-5">"Ceci est un tableau..."</span><span class="color-1">;</span></td>
            </tr>
            <tr>
                <th scope="row">5.</th>
                <td class="color-8">else</td>
            </tr>
            <tr>
                <th scope="row">6.</th>
                <td class="color-2">echo <span class="color-5">"Ceci n'est pas un tableau..."</span><span class="color-1">;</span></td>
            </tr>
            <tr>
                <th scope="row">7.</th>
                <td class="color-3">?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php
    $tab = array('array',126e7,[1, -152, "MAJ"]);
    if (is_array($tab))
        echo "Résultat: Ceci est un tableau....";
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





