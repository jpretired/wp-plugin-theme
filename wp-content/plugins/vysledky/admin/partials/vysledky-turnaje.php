<?php

/**
 * Partial of the turnaje
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
<div id="turnaje" class="wrap">
<h3>Zadej zobrazení turnajů</h3>
<form action="http://localhost/Projekty/csga-local/sprava-vysledku/zobraz-turnaje/" method="post">
<table style="line-height:70%;">
<tr><th>Rok (prázdný = všechny)</th>
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
<tr><th><input type="submit" name="proved" value="Zobraz turnaje" /></th></tr>
</table>
</form>
</div>