<?php

/**
 * Partial of the nastav dotaz
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
<div id="nastav_dotaz" class="wrap">
<h3>Nastav dotaz</h3>
<form action="http://localhost/Projekty/csga-local/sprava-vysledku/provedeni-dotazu/" method="post">
<table>
<tr><th>Rok (prázdný = všechny):</th>
<td><input type="text" size="4" name="rocnik" list="roky">
<datalist id="roky">
<option>2016</option>
<option>2015</option>
<option>2014</option>
<option>2013</option>
<option>2012</option>
<option>2011</option>
</datalist>
</td></tr>
<tr><th>ID hráče</th>
<td><input type="text" name="ID" size="4" maxlength="4" /></td></tr>
<tr><th rowspan="5">Kategorie:</th>
<td><input type="radio" name="kategorie" value="0" checked="checked"/> 0 Muži M55+ btto/ntto, M70+ btto</td></tr>
<tr><td><input type="radio" name="kategorie" value="1" /> 1 Ženy Z50+, Z65+ btto</td></tr>
<tr><td><input type="radio" name="kategorie" value="2" /> 2 Muži M70+, M75+ stfd ntto</td></tr>
<tr><td><input type="radio" name="kategorie" value="3" /> 3 Muži M75+ stfd btto</td></tr>
<tr><td><input type="radio" name="kategorie" value="9" /> Všechny</td></tr>
<tr><th>Počet výsledků k zobrazení:</th>
<td><input type="text" size="4" name="pocet_vysledku" value="-1" /></td></tr>
<tr><th><input type="submit" value="Proveď  dotaz" /></th></tr>
</table>
</form>
</div>

