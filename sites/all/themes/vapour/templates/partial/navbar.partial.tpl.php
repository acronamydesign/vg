
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
	<div class="container">
		<div class="navbar-header"></div><?php if($logo): ?><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="logo navbar-btn pull-left"><img src="<?php print $logo; ?>"/></a><?php endif ?><?php if(!empty($site_name)): ?><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="name navbar-brand"><?php print check_plain($site_name); ?></a><?php endif; ?>
		<button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><?php if(!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
		<div class="navbar-collapse collapse">
			<nav role="navigation"><?php if(!empty($primary_nav)): ?><?php print render($primary_nav) ?><?php endif; ?><?php if(!empty($secondary_nav)): ?><?php print render($secondary_nav) ?><?php endif; ?><?php if(!empty($page['navigation'])): ?><?php print render($page['navigation']); ?><?php endif; ?>
			</nav>
		</div><?php endif ?>
	</div>
</header>