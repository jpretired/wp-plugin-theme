<?php

/**
 * Partial of the události
 *
 *
 *
 * @link       http://wiki.jprodina.cz
 * @since      1.0.0
 *
 * @package    vysledky
 * @subpackage vysledky/admin/partials
 */
    add_action( 'admin_post_udalosti', array( $this, 'proved_udalosti_test' ));

    function proved_udalosti_test () {
        $wpUdalosti = new Vysledky_Proved_Udalosti();
    }

?>
<div id="udalosti" class="wrap">
<h3>Zadej zobrazení událostí</h3>
<form action="<?php echo admin_url('admin-post.php'), '?action=udalosti'; ?>" method="post">
<table style="line-height:70%;">
<tr><th><input type="submit" name="proved" value="Zobraz události" /></th></tr>
</table>
</form>
</div>
