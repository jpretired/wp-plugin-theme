<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of class-vysledky-proved-udalosti
 *
 * @author josef
 */
class Vysledky_Proved_Udalosti {
    
	public function __construct() {
            proved_udalosti();            
        }
        
public function proved_udalosti () {
    
//	ini_set('display_errors', 'On');
//	error_reporting(E_ALL | E_STRICT);
	if ( !is_super_admin() ) return "Nejste oprávněn!";
	
	// Vstupní zadání dotazu:
	// Ročník:
	$dnes_je = date('Y-m-d');
	// Zobraz zadání:
	echo "<strong>Zadání:</strong> dnešní datum <strong>", $dnes_je, "<br />";
	$url = $_SERVER['SERVER_NAME'];
	if ( $url == "localhost" ) {
		$url .= "/wp-st-vysledky";
	} else {
		$url .= "/sprava-vysledku";
	}
//	echo "<form action=http://" . $url . "/vymaz-turnaj/ method='post'>";
?>
<table style="float:left;font-size:75%;">
    <tr><th style="width:40px;">ID</th><th>Událost</th><th>Kategorie</th><th>Začíná</th><th>Detail</th></tr>

<?php

	global $wpdb;
	// Vybereme všechny události:
	$query = "SELECT * 
		FROM $wpdb->eme_events 
		WHERE event_start_date >= '$dnes_je'
		ORDER BY event_start_date";
//	echo $query."<br />"; 
	$udalosti = $wpdb->get_results($query);
	$pocet_radku = 0;
	// Pro každou událost:	
	foreach ( $udalosti as $udalost ) {
		// Vytvoříme řádek události:		
		$ID = $udalost->event_id;
		$kategorie_id = $udalost->event_category_ids;
		$atributy = unserialize($udalost->event_attributes);
		if ( array_key_exists('Detail_turnaje',$atributy) ) {
			$detail_turnaje = $atributy['Detail_turnaje'];
			if ( !strpos($detail_turnaje, 'turnaj?id=') ) {
			} else {
				$detail_turnaje = "OK";
			}
		} else {
			$detail_turnaje = "OK";
		}
		$query = "SELECT category_name FROM $wpdb->eme_categories WHERE category_id = '$kategorie_id'";
		$kategorie = $wpdb->get_var($query);
		$detail_polozka = ( $detail_turnaje == "OK" ) ? "OK" :
			"<a href='$detail_turnaje' target='_blank'>$detail_turnaje</a>";
		$radek = "<tr>" .
			"<td>" . $ID . "</td>";
		$radek .= "<td><strong>" . $udalost->event_name . "</strong></td>" .
			"<td>$kategorie</td>" .
			"<td>" . date('d. m. Y',strtotime($udalost->event_start_date)) . "</td>";
		$radek .= "<td>$detail_polozka</td></tr>";
		echo $radek;
		$pocet_radku++;
	}
?>
</table>
<p>&nbsp;</p>
<p><strong>Konec tabulky</strong>, počet řádků <?php echo $pocet_radku; ?></p>    
<?php }
}
