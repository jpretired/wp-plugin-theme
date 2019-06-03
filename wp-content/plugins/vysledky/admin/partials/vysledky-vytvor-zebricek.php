<?php

/**
 * Partial of the vytvoř žebříček
 *
 *
 *
 * @link       http://lostwebdesigns.com
 * @since      1.0.0
 *
 * @package    vysledky
 * @subpackage vysledky/admin/partials
 */
?>
<div id="vytvor_zebricek" class="wrap">
<h3>Zadej vytvoření žebříčku</h3>
<form action="http://localhost/Projekty/csga-local/sprava-vysledku/proved-zebrik/" method="post">
<table style="line-height:70%;">
<tr><th>Rok (sezóna)</th>
<td><input type="text" required size="4" name="rocnik" list="rocniky">
<datalist id="rocniky">
    <option value="2019">
    <option value="2018">
    <option value="2017">
    <option value="2016">
    <option value="2015">
    <option value="2014">
    <option value="2013">
    <option value="2012">
    <option value="2011">
</datalist>
</td></tr>
<tr><th>Zvol kategorii:</th>
<td><input type="radio" name="kategorie" value="0" checked="checked"/> 0 Muži M55+ btto/ntto, M70+ btto<br /><br />
<input type="radio" name="kategorie" value="1" /> 1 Ženy Z50+, Z65+ btto<br /><br />
<input type="radio" name="kategorie" value="2" /> 2 Muži M70+, M75+ stfd ntto<br /><br />
<input type="radio" name="kategorie" value="3" /> 3 Muži M75+ stfd btto</td></tr>
<tr><th>Počet nejlepších výsledků (všechny = -1):</th>
<td><input type="text" size="3" name="pocet_vysledku" value="-1" /></td></tr>
<tr><th>Nominační</th>
<td><input type="checkbox" name="nominacni" value="1" size="1" /></td></tr>
<tr><th>Nominační master senioři</th>
<td><input type="checkbox" name="masters" value="1" size="1" /></td></tr>
<tr><th>Nominační netto</th>
<td><input type="checkbox" name="vysl_netto" value="1" size="1" /></td></tr>
<tr><th><input type="submit" name="proved" value="Sestav žebříček" /></th></tr>
</table>
</form>
</div>