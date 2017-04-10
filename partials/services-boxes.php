
		<section id="services">
			<div class="container">

				<h1>THE SERVICE PACKAGES WE PROVIDE</h1>

				<div class="list-of-services">
				<?php 
				if (($locations = get_nav_menu_locations()) && isset($locations['menu-2'])):
					$menu = wp_get_nav_menu_object( $locations['menu-2']);
					$menu_items = wp_get_nav_menu_items($menu->term_id);
					foreach ((array) $menu_items as $key => $menu_item ):
						$title = $menu_item->title;
						$url = $menu_item->url;
						$db_id = $menu_item->object_id;
						?>
						<div class="span6 service">
							<a href="<?php echo get_permalink($db_id) ?>">
								<div class="icon" style="background-image:url(<?php the_field( 'service_icon', $db_id ); ?>);"></div>
								<h3><?php echo get_the_title( $db_id ); ?></h3>
								<button>Details</button>
							</a>
						</div>
						<?php 
					endforeach; 
				endif; 
				?>
				</div>

			</div>
		</section>