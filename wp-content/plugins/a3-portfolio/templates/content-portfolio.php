<?php
/**
 * The template for displaying portfolio content within loops.
 *
 * Override this template by copying it to yourtheme/portfolios/content-portfolio.php
 *
 * @author 		A3 Rev
 * @version     2.1.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;
global $portfolio_gallery;

$portfolio_id = get_the_ID();

$item_class = a3_portfolio_get_item_class( $portfolio_id );

if ( $item_class == '' ) {
	$item_class = 'uncategorized';
}

$portfolio_gallery = a3_portfolio_get_gallery( $portfolio_id );
?>
<div class="a3-portfolio-item-load a3-portfolio-item <?php echo $item_class; ?>" data-index="<?php echo $post->post_name; ?>">

	<?php do_action( 'a3_portfolio_before_loop_item', $portfolio_id ); ?>

	<div class="a3-portfolio-item-container">

		<div class="a3-portfolio-item-block">

			<?php do_action( 'a3_portfolio_before_loop_item_card', $portfolio_id ); ?>

			<?php a3_portfolio_card_get_first_thumb_image( $portfolio_id, $portfolio_gallery ); ?>
			<?php a3_portfolio_card_get_item_title( $portfolio_id ); ?>

			<?php
			/**
			 * a3_portfolio_after_loop_item_card hook
			 *
			 * @hooked a3_portfolio_card_item_description - 2
			 * @hooked a3_portfolio_card_item_viewmore - 5
			 */
			do_action( 'a3_portfolio_after_loop_item_card', $portfolio_id );
			?>

		</div>

	</div>

	<?php do_action( 'a3_portfolio_after_loop_item', $portfolio_id ); ?>

	<?php do_action( 'a3_portfolio_before_item_expander', $portfolio_id ); ?>

	<div class="a3-portfolio-item-expander-content" style="position: absolute;visibility: hidden;">

		<div class="a3-portfolio-item-content-container">

			<?php do_action( 'a3_portfolio_before_item_expander_title', $portfolio_id ); ?>

			<h2>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>

			<?php do_action( 'a3_portfolio_after_item_expander_title', $portfolio_id ); ?>

			<?php				
				do_action( 'a3_portfolio_before_item_expander_content', $portfolio_id );
			?>

			<?php				
				do_action( 'a3_portfolio_before_item_expander_full_content', $portfolio_id );
			?>

			<?php
				$txt = do_shortcode( get_the_content() ) ;			
			?>
			<div class="a3-portfolio-item-content-text" data-keiki="<?php echo $txt; ?>">
				
			</div>

			<?php				
				do_action( 'a3_portfolio_after_item_expander_full_content', $portfolio_id );
			?>

			<?php				
				do_action( 'a3_portfolio_main_after_item_expander_content', $portfolio_id );
			?>

		</div>

		<div class="clear"></div>

	</div>

	<?php do_action( 'a3_portfolio_after_item_expander', $portfolio_id ); ?>

</div>
