<?php

/**
 * Partial of the zadej výsledky
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
<div id="zadej_vysledky" class="wrap">
<h3>Zaveď nové výsledky</h3>
<div><style>.wpus{display: block;font-size: 12px; color: #f0f0f0;}</style>
[box color=red type=alert]<strong>POZOR</strong>: před zaváděním nových výsledků je nutno pro jistotu vyčistit <strong>diskový cache</strong>.
[/box]
</div>
<form enctype="multipart/form-data" action="http://localhost/Projekty/csga-local/sprava-vysledku/zavedeni-novych-vysledku/" method="POST">
<table>
<input type="hidden" name="MAX_FILE_SIZE" value="8000000" />
<tr><th>Vyber soubor.csv s výsledky:</th>
<td><input name="uploadedfile" type="file" /></td></tr>
<tr><th><input type="submit" value="Zaveď výsledky" /></th></tr>
</table>
</form>
</div>