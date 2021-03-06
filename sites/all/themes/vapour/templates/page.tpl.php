
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
<div class="main-container container">
	<header id="page-header" role="banner"><?php if($site_slogan): ?>
		<p class="lead"><?php print check_plain($site_slogan); ?></p><?php endif; ?><?php print render($page['header']); ?>
	</header>
	<div class="row"><?php if(!empty($page['sidebar_first'])): ?>
		<aside role="complementary" class="col-sm-3"><?php print render($page['sidebar_first']) ?>
		</aside><?php endif; ?><?php print "<section $content_column_class >"; ?><?php if(!empty($page['highlighted'])): ?>
		<div class="highlighted jumbotron"><?php print render($page['highlighted']);; ?></div><?php endif; ?><?php if(!empty($breadcrumb)): ?><?php print $breadcrumb; ?><?php endif; ?><a id="main-content"></a><?php print render($title_prefix); ?><?php if (!empty($title)): ?>
		<h1 class="page-header"><?php print $title; ?></h1><?php endif; ?><?php print $messages; ?><?php if(!empty($tabs)): ?><?php print render($tabs); ?><?php endif; ?><?php if(!empty($page['help'])): ?><?php print render($page['help']); ?><?php endif; ?><?php if(!empty($action_links)): ?>
		<ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?><?php print render($page['content']); ?><?php print "</section>"; ?><?php if(!empty($page['sidebar_second'])): ?>
		<aside role="complementary" class="col-sm-3"><?php print render($page['sidebar_second']) ?>
		</aside><?php endif; ?>
	</div>
</div>
<footer class="footer container"><?php print render($page['footer']); ?></footer>