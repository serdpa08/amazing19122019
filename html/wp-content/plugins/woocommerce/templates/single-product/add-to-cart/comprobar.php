<?php
/**
 * Single variation display
 *
 * This is a javascript-based template for single variations (see https://codex.wordpress.org/Javascript_Reference/wp.template).
 * The values will be dynamically replaced after selecting attributes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

defined( 'ABSPATH' ) || exit;

?>
<?php
function comprobar(){
	 //my_inputl.value = document.getElementById("talla_l");
	//my_inputxl.value = document.getElementById("talla_xl");
	/*alert("hola"+my_inputl.value);
	alert("hola"+my_inputm.value);
	alert("hola"+my_input_total);*/
	 /*my_input_total.value = parseInt(my_inputs.value, 10)+ parseInt(my_inputm.value, 10)+parseInt(my_inputl.value, 10) + parseInt(my_inputxl.value, 10)+parseInt(my_inputxxl.value, 10) + parseInt(my_inputxxxl.value, 10);*/
	//alert("hola"+my_input_total);
	//my_input_total= my_inputs.value+ my_inputm.value+my_inputl.value+my_inputxl.value+my_inputxxl.value+my_inputxxxl.value;
if (result.value != my_select.value) {
	alert("Las cantidades y las tallas no coinciden. Por favor revíselo antes de añadirlo al carrito. Gracias");
	

	

}
}
?>