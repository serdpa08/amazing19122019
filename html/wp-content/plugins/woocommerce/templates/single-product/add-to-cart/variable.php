<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.5
 */

defined( 'ABSPATH' ) || exit;

global $product;

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );
//Esta parte también la he tocado yo y es donde recupero los datos del producto. y Comparo con el nombre de las categorías.
global $post;
		$terms = get_the_terms( $post->ID, 'product_cat' );
		foreach ( $terms as $term ) {
    	$product_cat_id = $term->term_id;
    	if( $term = get_term_by( 'id', $product_cat_id, 'product_cat' ) )
    		{
    			//echo $term->name;
    			if (preg_match("/SML/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_tabla = $term->name;
  					  //echo $cat_tabla;
    			}
    			if (preg_match("/M1XL/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_tabla = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/XXL/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_tabla = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/XXXL/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_tabla = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/M/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_tabla = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/XS3X/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_tabla = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/SMLXL/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_tabla = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/XS2X/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_tabla = $term->name;
  					  //echo $cat_tabla;
    			}

    			 if (preg_match("/uno/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_niño = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/dos/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_niño = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/tres/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_niño = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/cuatro/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_niño = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/cinco/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_niño = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/seis/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_niño = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/siete/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_niño = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/ocho/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_niño = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/nueve/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_niño = $term->name;
  					  //echo $cat_tabla;
    			}

    			if (preg_match("/diez/", $term->name)) {
  					  
  					  //echo($term->name);
  					  //echo "Hola";
  					  $cat_niño = $term->name;
  					  //echo $cat_tabla;
    			}

    			/*elseif (preg_match("/^[M]{1}/", $term->name)) {

    				echo ($term->name);
    				echo "adios";
    		}*/
   		}
}

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php esc_html_e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
	<?php else : ?>
		<table class="variations" cellspacing="0">
			<tbody>
				<?php foreach ( $attributes as $attribute_name => $options ) : ?>
					<tr>
						<td class="label"><label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></label></td>
						<td class="value">
							<?php
								wc_dropdown_variation_attribute_options( array(
									'options'   => $options,
									'attribute' => $attribute_name,
									'product'   => $product,
								) );
								echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : '';
							?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<!-- Aqui el codigo de la talla SML -->
		<?php
		if ($term->name != 'Accesorios' && $cat_tabla == 'SML')  {?>

		<label>Introduce el número de prendas por <strong>talla:</strong> </label>
		<div style=" margin-left: 0px;">
			
			
			<br>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_s" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_m" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;</label>	
			<input id="talla_l" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			
			

		

			<output id="result" class="form-group" style="display: none;"></output>
		</div><br>
		<!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

		<!-- Aquí el código de la talla M1XL -->
		
		<?php
		if ($term->name != 'Accesorios' && $cat_tabla == 'M1XL')  {?>

		<label>Introduce el número de prendas por <strong>talla:</strong> </label>
		<div style=" margin-left: 0px;">
			
			
			<br>
			
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_m" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;XL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xl" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		

		
			<output id="result" class="form-group" style="display: none;"></output>
		</div><br><br>
		<!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

	<?php
		if ($term->name != 'Accesorios' && $cat_tabla == 'XXL')  {?>

		<label>Introduce el número de prendas por <strong>talla:</strong> </label>
		<div style=" margin-left: 0px;">
			
			
			<br>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_s" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_m" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;</label>	
			<input id="talla_l" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;XL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xl" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;XXL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xxl" type="number" name="XL" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>

		

			<output id="result" class="form-group" style="display: none;"></output>
		</div><br>
		<!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
		if ($term->name != 'Accesorios' && $cat_tabla == 'XXXL')  {?>

		<label>Introduce el número de prendas por <strong>talla:</strong> </label>
		<div style=" margin-left: 0px;">
			
			
			<br>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_s" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_m" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;</label>	
			<input id="talla_l" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;XL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xl" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;XXL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xxl" type="number" name="XL" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>

		<div class="form-group" style="display: inline;">

			<label>&nbsp;&nbsp;XXXL&nbsp;&nbsp;&nbsp;&nbsp;</label>	
			<input id="talla_xxxl" type="number" name="XXL" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;">
		</div>

			<output id="result" class="form-group" style="display: none;"></output>
		</div><br>
		<!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
		if ($term->name != 'Accesorios' && $cat_tabla == 'M')  {?>

		<label>Introduce el número de prendas por <strong>talla:</strong> </label>
		<div style=" margin-left: 0px;">
			
			
			<br>
			
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_m" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;</label>	
			<input id="talla_l" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;XL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xl" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;XXL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xxl" type="number" name="XL" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>

		

			<output id="result" class="form-group" style="display: none;"></output>
		</div><br>
		<!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
		if ($term->name != 'Accesorios' && $cat_tabla == 'XS3X')  {?>

		<label>Introduce el número de prendas por <strong>talla:</strong> </label>
		<div style=" margin-left: 0px;">
			
			
			<br>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;XS&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_s" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_s" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_m" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;</label>	
			<input id="talla_l" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;XL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xl" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;XXL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xxl" type="number" name="XL" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>

		<div class="form-group" style="display: inline;">

			<label>&nbsp;&nbsp;XXXL&nbsp;&nbsp;&nbsp;&nbsp;</label>	
			<input id="talla_xxxl" type="number" name="XXL" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;">
		</div>

			<output id="result" class="form-group" style="display: none;"></output>
		</div><br>
		<!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
		if ($term->name != 'Accesorios' && $cat_tabla == 'SMLXL')  {?>

		<label>Introduce el número de prendas por <strong>talla:</strong> </label>
		<div style=" margin-left: 0px;">
			
			
			<br>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_s" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_m" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;</label>	
			<input id="talla_l" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;XL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xl" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		

		

			<output id="result" class="form-group" style="display: none;"></output>
		</div><br>
		<!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
		if ($term->name != 'Accesorios' && $cat_tabla == 'XS2X')  {?>

		<label>Introduce el número de prendas  por <strong>talla:</strong> </label>
		<div style=" margin-left: 0px;">
			
			
			<br>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;XS&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_s" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_s" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_m" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
			</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;</label>	
			<input id="talla_l" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;&nbsp;XL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xl" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>
			<div class="form-group" style="display: inline;">
			<label>&nbsp;&nbsp;XXL&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input id="talla_xxl" type="number" name="XL" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
		</div>

		

			<output id="result" class="form-group" style="display: none;"></output>
		</div><br>
		<!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
    if ($term->name != 'Accesorios' && $cat_niño == 'uno')  {?>

    <label>Introduce el número de prendas para niño por <strong>talla:</strong> </label>
    <div style=" margin-left: 0px;">
      
      
      <br>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;4-5&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_4" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;6-8&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_8" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;10-12&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_16" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>

    

      <output id="result-nino" class="form-group-niño" style="display: none;"></output>
    </div><br><br>
    <!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>


<?php
    if ($term->name != 'Accesorios' && $cat_niño == 'dos')  {?>

    <label>Introduce el número de prendas para niño por <strong>talla:</strong> </label>
    <div style=" margin-left: 0px;">
      
      
      <br>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_4" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_8" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;12&nbsp;&nbsp;&nbsp;&nbsp;</label> 
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;16&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_16" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    
  </div>
    

      <output id="result-nino" class="form-group-niño" style="display: none;"></output>
    </div><br><br>
    <!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
    if ($term->name != 'Accesorios' && $cat_niño == 'tres')  {?>

    <label>Introduce el número de prendas para niño por <strong>talla:</strong> </label>
    <div style=" margin-left: 0px;">
      
      
      <br>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;3-4&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_4" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;5-6&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_8" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;7-8&nbsp;&nbsp;&nbsp;&nbsp;</label>  
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>
    <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;9-10&nbsp;&nbsp;&nbsp;&nbsp;</label> 
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;12-14&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_16" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    
  </div>
    

      <output id="result-nino" class="form-group-niño" style="display: none;"></output>
    </div><br><br>
    <!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
    if ($term->name != 'Accesorios' && $cat_niño == 'cuatro')  {?>

    <label>Introduce el número de prendas para niño por <strong>talla:</strong> </label>
    <div style=" margin-left: 0px;">
      
      
      <br>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;8-10&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_4" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;12-14&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_16" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    
  </div>
    

      <output id="result-nino" class="form-group-niño" style="display: none;"></output>
    </div><br><br>
    <!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
    if ($term->name != 'Accesorios' && $cat_niño == 'cinco')  {?>

    <label>Introduce el número de prendas para niño por <strong>talla:</strong> </label>
    <div style=" margin-left: 0px;">
      
      
      <br>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;4-6&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_4" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;8-10&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_8" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;12-14&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_16" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    
  </div>
    

      <output id="result-nino" class="form-group-niño" style="display: none;"></output>
    </div><br><br>
    <!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
    if ($term->name != 'Accesorios' && $cat_niño == 'seis')  {?>

    <label>Introduce el número de prendas para niño por <strong>talla:</strong> </label>
    <div style=" margin-left: 0px;">
      
      
      <br>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;2-3&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_4" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;4-6&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_8" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;8-10&nbsp;&nbsp;&nbsp;&nbsp;</label> 
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;12-14&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_16" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    
  </div>
    

      <output id="result-nino" class="form-group-niño" style="display: none;"></output>
    </div><br><br>
    <!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
    if ($term->name != 'Accesorios' && $cat_niño == 'siete')  {?>

    <label>Introduce el número de prendas para niño por <strong>talla:</strong> </label>
    <div style=" margin-left: 0px;">
      
      
      <br>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;3-4&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_4" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;5-6&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_8" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;7-8&nbsp;&nbsp;&nbsp;&nbsp;</label>  
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>
    <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;9-11&nbsp;&nbsp;&nbsp;&nbsp;</label> 
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;12-14&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_16" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    
  </div>
    

      <output id="result-nino" class="form-group-niño" style="display: none;"></output>
    </div><br><br>
    <!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
    if ($term->name != 'Accesorios' && $cat_niño == 'ocho')  {?>

    <label>Introduce el número de prendas para niño por <strong>talla:</strong> </label>
    <div style=" margin-left: 0px;">
      
      
      <br>
      
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_8" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;16&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_16" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>

    

      <output id="result-nino" class="form-group-niño" style="display: none;"></output>
    </div><br><br>
    <!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
    if ($term->name != 'Accesorios' && $cat_niño == 'nueve')  {?>

    <label>Introduce el número de prendas para niño por <strong>talla:</strong> </label>
    <div style=" margin-left: 0px;">
      
      
      <br>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_4" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_8" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;</label>  
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>
    <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;</label> 
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>

      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;12&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_16" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>

    

      <output id="result-nino" class="form-group-niño" style="display: none;"></output>
    </div><br><br>
    <!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>

<?php
    if ($term->name != 'Accesorios' && $cat_niño == 'diez')  {?>

    <label>Introduce el número de prendas para niño por <strong>talla:</strong> </label>
    <div style=" margin-left: 0px;">
      
      
      <br>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;1-2&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_4" type="number" class="form-control prc" name="XS" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;3-4&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_8" type="number" name="S" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
      </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;5-6&nbsp;&nbsp;&nbsp;&nbsp;</label>  
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>
    <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;7-8&nbsp;&nbsp;&nbsp;&nbsp;</label>  
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>
    <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;9-10&nbsp;&nbsp;&nbsp;&nbsp;</label> 
      <input id="talla_12" type="number" name="M" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>
      <div class="form-group-niño" style="display: inline;">
      <label>&nbsp;&nbsp;&nbsp;11-12&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input id="talla_16" type="number" name="L" class="form-control prc" placeholder="0" style="width: 40px; height: 30px; border: 1.5px solid black; margin-left: 4px; text-align: right;"/>
    </div>

    

      <output id="result-nino" class="form-group-niño" style="display: none;"></output>
    </div><br><br>
    <!--<button type="submit" onclick="comprobar();">enviar</button>-->
<?php } ?>






<script type="text/javascript">
var my_select = document.getElementById("pa_cantidades");



var tallas= document.getElementById("result");
var niños= document.getElementById("result-nino");
var tot = 0;

 //funcion que se ejecuta al hacer click sobre el boton añadir al carrito
function comprobar(){
	//suma1 y suma son donde guardo el valor de los output
	  tot= suma + suma1;
	 //alert(tot.value);
if (tot != my_select.value) {
	alert("Las cantidades y las tallas no coinciden. Por favor revíselo antes de añadirlo al carrito. Gracias");

	jQuery('form').each(function(){
		jQuery(this).submit(function(e){
			//alert('subida al carrito interceptada');
			e.preventDefault();
		});
		location.reload();

	});
	//alert("pasa por aqui");
	
	
	return true;


	

}
else {return false;}
}


</script>
<!-- Este codigo jquery lo que hace es que suma automaticamente el valor de los inputs y lo muestra por pantalla
	voy a ocultar luego ese input, pero con quien calcularé si es igual que las cantidades es con ese input-->
<script type="text/javascript" src="https://amazingsportwear.com/wp-includes/js/jquery/jquery.js"></script>
<script>
	var suma = 0;
	var suma1= 0;
	jQuery('.form-group').on('input', '.prc', function(){

		var totalSum=0;

		jQuery('.form-group .prc').each(function(){

			var inputVal= jQuery(this).val();
			if (jQuery.isNumeric(inputVal)) {
				totalSum+= parseFloat(inputVal);
			}
		});

		jQuery('#result').text(totalSum);
		console.log(totalSum);
		suma= totalSum;
		

	});

	jQuery('.form-group-niño').on('input', '.prc', function(){

		var totalSuma=0;

		jQuery('.form-group-niño .prc').each(function(){

			var inputVal= jQuery(this).val();
			if (jQuery.isNumeric(inputVal)) {
				totalSuma+= parseFloat(inputVal);
			}
		});

		jQuery('#result-nino').text(totalSuma);
		console.log(totalSuma);
		suma1= totalSuma;
		


	});
</script>
		
			<?php
				/**
				 * Hook: woocommerce_before_single_variation.
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
				 *
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * Hook: woocommerce_after_single_variation.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>

		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>

</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );
