<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$modifier;

if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'grid':
            $modifier = 'catalog-type__list--grid';
            break;
        case 'list':
            $modifier = 'catalog-type__list--list';
            break;
        case 'table':
            $modifier = 'catalog-type__list--table';
            break;
		default: 
			$modifier = 'catalog-type__list--grid';
			break;
    }
}

?>
<ul class="catalog-type__list <?=$modifier;?>">
