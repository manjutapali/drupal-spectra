<div class="container">
	<div class="col header-div">
		<header id="header">
		  <div id="logo" class="clr">
		    <?php if (theme_get_setting('image_logo','unreal')): ?>
		    <?php if ($logo): ?><div class="site-img-logo clr"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
		      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
		    </a></div><?php endif; ?>
		    <?php else: ?>
		    <div>
		      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
		      <?php if ($site_slogan): ?><div class="blog-description"><?php print $site_slogan; ?></div><?php endif; ?>
		    </div>
		    <?php endif; ?>
		  </div>
		</header>
		<?php if ($page['search_block']): ?>
		  <aside id="header-aside">
		    <?php print render($page['search_block']); ?>
		  </aside>
		<?php endif; ?>
	</div>

	<div class="col nav-bar">
		<div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close"></a></div>
		<nav class="nav-menu">
 			<div>
 				<?php
 					$main_menu_tree = menu_tree(variable_get('menu_main_link_source', 'main-menu'));
 					print drupal_render($main_menu_tree);
 				?>
			</div>
		</nav>
	</div>
	

	<?php if($page['sidebar']):?>
		<aside class="sidebar-container">
			<?php print render($page['sidebar']); ?>
		</aside>
	<?php endif; ?>

	<?php if($page['content']): ?>
		<div class="col content-main">
			<?php print render($page['content']); ?>
		</div>
	<?php endif; ?>

	<?php if($page['advbar']): ?>
		<aside class="advbar col">
			<?php print render($page['advbar']); ?>
		</aside>
	<?php endif; ?>

</div>
	